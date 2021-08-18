<?php

// $p = '123456';



// echo password_hash($p, PASSWORD_DEFAULT);


// $output['postData'] = $_POST;






$hash = '$2y$10$RQ2Q6sTJqPKqrXBpv1Y3Uu6LOD41xOuMzWfRZL/GkMgo5XL3Kteem';

echo password_verify('123456', $hash) ? 'yes' : 'no';
