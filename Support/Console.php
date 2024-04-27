<?php

namespace Support;


class Console {
    protected $directory = '.';
    public function __construct()
    {
        echo "Console working : ". Console::class . "\n";
    }
    public static function check_avaliable_enities($to_check) {
        $entities = [
            'model',
            'controller'
        ];
        $found = in_array($to_check, $entities);
        return $found;
    }

    public function get_name($argv) {
        if (count($argv) < 3)
        {
            if (empty($argv[2]))
            {
                echo "choose name for your model ?\n====> ";
                $name = trim(fgets(STDIN));
            }
        }
        else 
            $name = $argv[2];
        return $name; 
    }
    public function create_directory($path) {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
            return $path;
        }
        return false;
    }
    
    public function create_file($filePath, $entity)
    {
        // Parse the file path to get the directory
        $directory = ucfirst($entity)."s/". dirname($filePath);
        
        // Create directory if it does not exist using the create_directory method
        $this->create_directory($directory);
        // Define the path to the template file
        $templatePath = __DIR__."/../templates/".$entity.".txt";
        // Read the content from the template file
        $templateContent = file_get_contents($templatePath);
        if ($templateContent === false) {
            echo "Error: Unable to read the template file.\n";
            return false;
        }
        
        // Extract the model name from the file path
        $modelName = basename($filePath, '.php');
        // Replace the placeholder in the template content with the actual model name
        $content = str_replace('{{modelName}}', $modelName, $templateContent);
        
        // Write the content to the file path
        $filePath = __DIR__."/../".ucfirst($entity)."s/".$filePath;
        echo "file path: ". $filePath;
        if (file_put_contents($filePath, $content, FILE_APPEND) === false) {
            echo "Error: Unable to create the file at $filePath.\n";
            return false;
        }
        
        echo "File created: $filePath\n";
        return true;
    }
    
    public function create($argv) {
        $make_what = $argv[1];
        $entity = explode(':', $make_what);
        if(!$this->check_avaliable_enities($entity[1]))
        {
            
            echo "no entity found\n";
            return;
        }

        $fileName = $this->get_name($argv) . '.php'; // Get the file name using the get_name method with the whole argv
        $this->create_file($fileName, $entity[1]); // Call the create_file method to generate the file
        // echo basename();

        // $templatePath = 'model_template.txt';

        // // Read template content
        // $templateContent = file_get_contents($templatePath);
        // if ($templateContent === false) {
        //     echo "Error: Unable to read the template file.\n";
        //     return false;
        // }

        // // Replace placeholders with model name
        // $content = str_replace('{{modelName}}', $name, $templateContent);

        // // Create the model file
        // if (file_put_contents($filePath, $content) === false) {
        //     echo "Error: Unable to create the model file.\n";
        //     return false;
        // }

        // echo "Model created: $filePath\n";
        // return true;
    }
}
?>
