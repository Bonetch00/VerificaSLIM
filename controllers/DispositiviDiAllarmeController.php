<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    include_once 'Impianto.php';
    
    class DispositiviDiAllarmeController {
        function dispositivi(Request $request, Response $response, $args) {
            $i= new Impianto();
            $a=new array();
            foreach($i->$listaDispositivi as $d){
                if(get_class($d)=="DispositivoDiAllarme")
                    $a[]=$d->getID();
            }

            $response->getBody()->write(json_encode($a));
            return $response->withHeader('Content-Type', 'application/json');
        }

        function dispositivo (Request $request, Response $response, $args){
            $i= new Impianto();
            $idCercato = $args['id'];
            $dCercato = null;

            foreach ($i->listaDispositivi as $d) {
                if (strtolower($d->getID()) === strtolower($idCercato)) {
                    $dCercato = $d;
                    break;
                }
            }
            
            if (!empty($dCercato)) {
                $response->getBody()->write(json_encode($dCercato));
            } else {
                $response->getBody()->write("dispositivo non presente");
            }
            
            return $response->withHeader('Content-Type', 'application/json');
                $response->getBody()->write(json_encode($a));
                return $response->withHeader('Content-Type', 'application/json');
            }
    }
?>