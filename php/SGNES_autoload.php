<?php
/**
 * Esta clase fue y será generada automáticamente. NO EDITAR A MANO.
 * @ignore
 */
class SGNES_autoload 
{
	static function existe_clase($nombre)
	{
		return isset(self::$clases[$nombre]);
	}

	static function cargar($nombre)
	{
		if (self::existe_clase($nombre)) { 
			 require_once(dirname(__FILE__) .'/'. self::$clases[$nombre]); 
		}
	}

	static protected $clases = array(
		'SGNES_comando' => 'extension_toba/SGNES_comando.php',
		'SGNES_modelo' => 'extension_toba/SGNES_modelo.php',
		'SGNES_ci' => 'extension_toba/componentes/SGNES_ci.php',
		'SGNES_cn' => 'extension_toba/componentes/SGNES_cn.php',
		'SGNES_datos_relacion' => 'extension_toba/componentes/SGNES_datos_relacion.php',
		'SGNES_datos_tabla' => 'extension_toba/componentes/SGNES_datos_tabla.php',
		'SGNES_ei_arbol' => 'extension_toba/componentes/SGNES_ei_arbol.php',
		'SGNES_ei_archivos' => 'extension_toba/componentes/SGNES_ei_archivos.php',
		'SGNES_ei_calendario' => 'extension_toba/componentes/SGNES_ei_calendario.php',
		'SGNES_ei_codigo' => 'extension_toba/componentes/SGNES_ei_codigo.php',
		'SGNES_ei_cuadro' => 'extension_toba/componentes/SGNES_ei_cuadro.php',
		'SGNES_ei_esquema' => 'extension_toba/componentes/SGNES_ei_esquema.php',
		'SGNES_ei_filtro' => 'extension_toba/componentes/SGNES_ei_filtro.php',
		'SGNES_ei_firma' => 'extension_toba/componentes/SGNES_ei_firma.php',
		'SGNES_ei_formulario' => 'extension_toba/componentes/SGNES_ei_formulario.php',
		'SGNES_ei_formulario_ml' => 'extension_toba/componentes/SGNES_ei_formulario_ml.php',
		'SGNES_ei_grafico' => 'extension_toba/componentes/SGNES_ei_grafico.php',
		'SGNES_ei_mapa' => 'extension_toba/componentes/SGNES_ei_mapa.php',
		'SGNES_servicio_web' => 'extension_toba/componentes/SGNES_servicio_web.php',
	);
}
?>