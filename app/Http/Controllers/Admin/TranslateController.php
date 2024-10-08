<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TranslateController extends Controller
{
    public function __construct()
    {
        $this->languages = config('app.languages');
    }
    public function index(Request $request)
    {
        $files = $this->availableTranslationFiles();
        $file = $request->file ?? 'auth.php';
        foreach ($this->languages as $key => $value) {
            $f = base_path("lang/" . $key . "/$file");
            if(!is_file($f)){
                $contents = file_get_contents(base_path("lang/" . config("app.fallback_locale") . "/$file"));
                file_put_contents($f, $contents);
            }
            $lang[$key] = include($f);
        }

        return view("admin.translate.index", compact("files", "file", "lang"));
    }


    public function update(Request $request)
    {
//        dd($request->all());
        $f = $request->file ?? 'auth.php';

        foreach ($this->languages as $k => $v) {
            $n = 0;
            $file = "<?php \n return [\n";
            foreach ($request->key as $key) {
                if (empty($key)) {
                    $n++;
                    continue;
                }
                $file .= "\"" .$key. "\" => \"" . $request[$k][$n] . "\",\n";

                $n++;
            }
            $file .= "];";
            file_put_contents(base_path('lang/' . $k . "/$f"), $file);
        }
        if($request->file){
            $r = "?file=".$request->file;
        }else{
            $r = "";
        }

        return redirect('/admin/translate'.$r)->with('message', 'Yenilənmə əməliyyatı uğurla başa çatdı.');
    }

    public function availableTranslationFiles(){
        $files = $this->listOfFiles("lang/".config("app.fallback_locale"));

        foreach($files as $key=>$file){
            if($file == "validation.php")
                unset($files[$key]);
        }

        return $files;
    }

    public function create_files(Request $request) {
        $fname = $request->filename;
        $fname_lowered = mb_strtolower(str_replace(array(' ','-','%20'), array('_','_','_'), $fname));
        $ftemplate = "<?php \n return [\n
            '' => '',\n
        ];";

        foreach($this->languages as $k => $v){
            file_put_contents(base_path('lang/'.$k.'/'.$fname_lowered.'.php'), $ftemplate);
        }

        return redirect('/admin/translate?file='.$fname_lowered.'.php')->with('message', 'New file named '.$fname_lowered.'.php created successfully.');
    }

    public function listOfFiles($directoryPath) {
        $directoryPath = base_path($directoryPath);
        return scandir($directoryPath);
    }

}
