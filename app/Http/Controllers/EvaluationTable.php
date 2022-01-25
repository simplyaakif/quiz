<?php


    namespace App\Http\Controllers;


    use App\Evaluation;
    use LaravelEnso\Tables\app\Contracts\Table;

    class EvaluationTable implements Table {
        protected const TemplatePath = __DIR__.'/../Controllers/Tables/Template/Evaluation.json';
        public function query(): Builder
        {
            return Evaluation::selectRaw('
            permissions.id, permissions.name, permissions.description,
            permissions.type, permissions.created_at, permissions.is_default
        ');
        }
        public function templatePath(): string
        {
            return static::TemplatePath;
        }
    }
