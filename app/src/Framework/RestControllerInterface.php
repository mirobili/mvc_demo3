<?php

namespace App\Framework;

interface RestControllerInterface
{
    public static function actionGet($request);

    public static function actionPost($request);

    public static function actionPut($request);

    public static function actionPatch($request);

    public static function actionDelete($request);
}