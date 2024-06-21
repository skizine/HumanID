<?php

$humanController = new HumanController();
$humanText = $humanController->generateQuestion();
echo $humanText;
flush();

class HumanController 
{

    public function generateQuestion() {
        $x = rand(0, 100);
        $y = rand(0, 100);
        $z = $x + $y;
        $txt = vsprintf("%u + %u",array($x,$y));
        //$mathObject = new MathObject();
        //$mathObject->question = $txt;
        //$mathObject->answer = $z;
        //$this->response = $this->response->withType('application/json')->withStringBody(json_encode(["question" => $txt, "answer" => "$z"]));
        
        //$this->response = $this->response->withType('application/json')->withStringBody(json_encode($mathObject));
     
        //return $this->response;

        return json_encode(["question" => $txt, "answer" => "$z"]);
    }
}

