<?php
// Función para llamar al webservice y devolver el resultado en un array
ini_set("allow_url_fopen", 1);
  $url ='https://ticapacitacion.com/webapi/northwind/products';
  $json = file_get_contents($url);
  $array = json_decode($json,true);
  //print_r($array);
  if (count($array) > 0):
?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($array))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($array as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>