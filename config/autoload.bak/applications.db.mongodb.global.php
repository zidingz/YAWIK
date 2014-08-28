<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'ApplicationRepository' => '\Applications\Repository\Service\ApplicationRepositoryFactory',
            'ApplicationMapper' => '\Applications\Repository\Service\ApplicationMapperFactory',
            'EducationMapper'   => '\Applications\Repository\Service\EducationMapperFactory',
        ),
    ),
);
