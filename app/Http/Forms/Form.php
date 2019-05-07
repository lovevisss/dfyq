<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2019/4/16
 * Time: 11:19
 */

namespace App\Http\Forms;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
abstract class Form
{
    use ValidatesRequests;
    protected $request;
    protected $rules =[];
//    abstract protected function rules();

    public function __construct(Request $request = null)
    {
        $this->request = $request?: request();
    }

    protected function isValid()
    {
        $this->validate($this->request, $this->rules);
    }

    public function save()
    {
        //do validation
        //and persist() if passes
        if($this->isValid())
        {
            return $this->persist();
        }
        return false;
    }

    abstract public function persist();
}