<?php
    function ConverJson(&$boletos, &$camisas = 0 , &$paquetes = 0){
            $dias = array(
                0 => 'pase_dia',
                1 => 'todos_dias',
                2 => 'pase_dosdias'
            );
            $json = array();
            $total_boletos = array_combine($dias,$boletos);

            foreach($total_boletos as $key => $boleto){
                if( (int) $boleto > 0){
                    $json[$key] = (int) $boleto ;
                }
            }
            $camisas = (int) $camisas;
            $paquetes = (int) $paquetes;
            if( $camisas > 0){
                $json['camisas'] = $camisas;
            }
            if( $paquetes > 0 ){
                $json['paquetes'] =  $paquetes;
            }
            

            return json_encode($json);
    }

    function Eventos_json(&$eventos){
            $json_evento = array();
            foreach($eventos as $evento){
                $json_evento['eventos'][] = $evento;
            }

            return json_encode($json_evento);
        
     }










?>