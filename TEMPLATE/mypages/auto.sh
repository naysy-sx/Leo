#!/bin/bash

# Путь к папке с HTML-файлами
html_dir="./"

# Путь к папке с контроллерами
controllers_dir="./controllers"

# Путь к папке с представлениями
views_dir="./views"

# Удаление папки контроллеров и ее содержимого, если она существует
rm -rf "$controllers_dir"

# Удаление папки представлений и ее содержимого, если она существует
rm -rf "$views_dir"

# Создание папки контроллеров
mkdir -p "$controllers_dir"

# Создание папки представлений
mkdir -p "$views_dir"

# Перебор HTML-файлов
for html_file in "$html_dir"/*.html; do
    # Извлечение имени файла без расширения
    file_name=$(basename "$html_file" .html)
    
    # Создание контроллера
    controller_name=$(echo "$file_name" | awk -F'-' '{for(i=1;i<=NF;i++) printf "%s", toupper(substr($i,1,1)) substr($i,2)}')
    controller_file="$controllers_dir/${controller_name}Controller.php"
    
    # Создание контроллера
    echo "<?php
namespace app\controllers;
use yii\web\Controller;

class ${controller_name}Controller extends Controller
{
    public function actionIndex()
    {
        return \$this->render('${file_name}');
    }
}
?>" > "$controller_file"
    
    # Создание папки представления и файла представления
    if [[ "$file_name" == *"-"* ]]; then
        view_dir=$(echo "$file_name" | cut -d'-' -f1)
        view_file=$(echo "$file_name" | cut -d'-' -f2-)
        mkdir -p "$views_dir/$view_dir"
        cp "$html_file" "$views_dir/$view_dir/${view_file}.php"
    else
        cp "$html_file" "$views_dir/${file_name}.php"
    fi
done