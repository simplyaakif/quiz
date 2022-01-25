<?php

    use LaravelEnso\Tables\app\Traits\Init;
    use LaravelEnso\Permissions\app\Tables\Builders\PermissionTable;

    class EvaluationTb extends Controller {

        use Init;

        protected $tableClass = PermissionTable::class;
    }
