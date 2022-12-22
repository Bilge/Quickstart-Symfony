<?php
declare(strict_types=1);

namespace App\Controller;

use ScriptFUSION\Porter\Import\Import;
use ScriptFUSION\Porter\Porter;
use ScriptFUSION\Porter\Provider\Steam\Resource\GetAppList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;

final class AppListAction extends AbstractController
{
    #[Route('/')]
    public function __invoke(Porter $porter): Response
    {
        return new StreamedResponse(
            function () use ($porter): void {
                foreach ($porter->import(new Import(new GetAppList())) as $app) {
                    echo "$app[appid]\n";
                }
            },
            headers: ['content-type' => 'text/plain'],
        );
    }
}
