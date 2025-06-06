<?php

return [
    'bulk_delete'		=> 'Confirmez la suppression du lot d\'objets',
    'bulk_restore'      => 'Confirmer la restauration des actifs en bloc', 
  'bulk_delete_help'	=> 'Vérifiez les objets ci-dessous pour la suppression du lot. Une fois supprimés, ces objets peuvent être restaurés, mais ils ne seront plus associés avec les utilisateurs auxquels ils sont actuellement assignés.',
  'bulk_restore_help'	=> 'Examinez les actifs pour la restauration en masse ci-dessous. Une fois restaurés, ces actifs ne seront pas associés aux utilisateurs·trices auxquels ils ont été assignés précédemment.',
  'bulk_delete_warn'	=> 'Vous êtes sur le point de supprimer :asset_count objets.',
  'bulk_restore_warn'	=> 'Vous êtes sur le point de restaurer :asset_count actifs.',
    'bulk_update'		=> 'Mise à jour en masse des actifs',
    'bulk_update_help'	=> 'Ce formulaire vous permet de mettre à jour plusieurs actifs à la fois. Remplissez seulement les champs que vous devez modifier. Tous les champs laissés vides resteront inchangés. ',
    'bulk_update_warn'	=> 'Vous êtes sur le point de modifier les propriétés d\'un seul matériel.|Vous êtes sur le point de modifier les propriétés de :asset_count matériels.',
    'bulk_update_with_custom_field' => 'Notez que les assets sont de :asset_model_count différents modèles.',
    'bulk_update_model_prefix' => 'Sur les modèles', 
    'bulk_update_custom_field_unique' => 'Ce champ est unique et ne peut pas être édité en volume.',
    'checkedout_to'		=> 'Extrait vers',
    'checkout_date'		=> 'Date d\'attribution',
    'checkin_date'		=> 'Date de dissociation',
    'checkout_to'		=> 'Attribuer à',
    'cost'				=> 'Coût d\'achat',
    'create'			=> 'Créer des actifs',
    'date'				=> 'Date d\'achat',
    'depreciation'	    => 'Dépréciation',
    'depreciates_on'	=> 'Amortit sur',
    'default_location'	=> 'Emplacement par défaut',
    'default_location_phone' => 'Téléphone de localisation par défaut',
    'eol_date'			=> 'Date de fin de vie',
    'eol_rate'			=> 'Taux de EOL',
    'expected_checkin'  => 'Date de dissociation prévue',
    'expires'			=> 'Expire',
    'fully_depreciated'	=> 'Entièrement amortis',
    'help_checkout'		=> 'Si vous souhaitez attribuer cet actif immédiatement, sélectionnez "prêt à déployer" dans la liste ci-dessus. ',
    'mac_address'		=> 'Adresse MAC',
    'manufacturer'		=> 'Fabricant',
    'model'				=> 'Modèle',
    'months'			=> 'Mois',
    'name'				=> 'Nom de l\'actif',
    'notes'				=> 'Remarques',
    'order'				=> 'Numéro de Commande',
    'qr'				=> 'Code QR',
    'requestable'		=> 'Les utilisateurs·trices peuvent demander cet actif',
    'redirect_to_all'   => 'Retourner à tous les :type',
    'redirect_to_type'   => 'Aller à :type',
    'redirect_to_checked_out_to'   => 'Aller aux attributions',
    'select_statustype'	=> 'Choisissez le type de statut',
    'serial'			=> 'Série ',
    'status'			=> 'Statut',
    'tag'				=> 'Numéro d\'inventaire',
    'update'			=> 'Mise à jour de l\'actif',
    'warranty'			=> 'Garantie',
        'warranty_expires'		=> 'Expiration de garantie',
    'years'				=> 'années',
    'asset_location' => 'Mettre à jour l\'emplacement de l\'actif',
    'asset_location_update_default_current' => 'Mettre à jour l\'emplacement par défaut ET l\'emplacement réel',
    'asset_location_update_default' => 'Mettre à jour uniquement l\'emplacement par défaut',
    'asset_location_update_actual' => 'Mettre à jour uniquement l\'emplacement actuel',
    'asset_not_deployable' => 'L\'actif n\'est pas déployable. L\'actif ne peut pas être affecté.',
    'asset_not_deployable_checkin' => 'That asset status is not deployable. Using this status label will checkin the asset.',
    'asset_deployable' => 'L\'actif est déployable. L\'actif peut être affecté.',
    'processing_spinner' => 'Traitement... (Cela peut prendre un peu de temps sur les fichiers volumineux)',
    'optional_infos'  => 'Information facultative',
    'order_details'   => 'Information liée à l\'achat',
    'calc_eol'    => 'If nulling the EOL date, use automatic EOL calculation based on the purchase date and EOL rate.',
];
