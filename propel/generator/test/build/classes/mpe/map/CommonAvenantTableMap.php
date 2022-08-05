<?php



/**
 * This class defines the structure of the 'Avenant' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonAvenantTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAvenantTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('Avenant');
        $this->setPhpName('CommonAvenant');
        $this->setClassname('CommonAvenant');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_avenant', 'IdAvenant', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_contrat', 'IdContrat', 'INTEGER', true, null, null);
        $this->addColumn('numero_avenant', 'NumeroAvenant', 'VARCHAR', false, 20, null);
        $this->addColumn('type_avenant', 'TypeAvenant', 'INTEGER', false, 5, null);
        $this->addColumn('objet_avenant', 'ObjetAvenant', 'VARCHAR', false, 100, null);
        $this->addColumn('montant_avenant_ht', 'MontantAvenantHt', 'VARCHAR', false, 30, null);
        $this->addColumn('montant_avenant_ttc', 'MontantAvenantTtc', 'VARCHAR', false, 30, null);
        $this->addColumn('pourcentage_augmentation_marche_initial', 'PourcentageAugmentationMarcheInitial', 'CHAR', false, 5, null);
        $this->addColumn('pourcentage_augmentation_cumule', 'PourcentageAugmentationCumule', 'CHAR', false, 5, null);
        $this->addColumn('montant_total_marche_tout_avenant_cumule', 'MontantTotalMarcheToutAvenantCumule', 'VARCHAR', false, 30, null);
        $this->addColumn('date_reception_projet_par_secretaire_cao', 'DateReceptionProjetParSecretaireCao', 'VARCHAR', false, 10, null);
        $this->addColumn('date_reception_projet_par_charge_etude', 'DateReceptionProjetParChargeEtude', 'VARCHAR', false, 10, null);
        $this->addColumn('date_observation_par_sv', 'DateObservationParSv', 'VARCHAR', false, 10, null);
        $this->addColumn('date_retour_projet', 'DateRetourProjet', 'VARCHAR', false, 10, null);
        $this->addColumn('date_validation_projet', 'DateValidationProjet', 'VARCHAR', false, 10, null);
        $this->addColumn('date_validation_projet_vu_par', 'DateValidationProjetVuPar', 'INTEGER', false, 5, null);
        $this->addColumn('date_cao', 'DateCao', 'VARCHAR', false, 10, null);
        $this->addColumn('avis_cao', 'AvisCao', 'INTEGER', false, 5, null);
        $this->addColumn('date_cp', 'DateCp', 'VARCHAR', false, 10, null);
        $this->addColumn('date_signature_avenant', 'DateSignatureAvenant', 'VARCHAR', false, 10, null);
        $this->addColumn('date_reception_dossier', 'DateReceptionDossier', 'VARCHAR', false, 10, null);
        $this->addColumn('date_formulation_observation_par_sv_sur_sdossier', 'DateFormulationObservationParSvSurSdossier', 'VARCHAR', false, 10, null);
        $this->addColumn('date_retour_dossier_finalise', 'DateRetourDossierFinalise', 'VARCHAR', false, 10, null);
        $this->addColumn('date_validation_dossier_finalise', 'DateValidationDossierFinalise', 'VARCHAR', true, 10, null);
        $this->addColumn('date_transmission_prefecture', 'DateTransmissionPrefecture', 'VARCHAR', false, 10, null);
        $this->addColumn('date_notification', 'DateNotification', 'VARCHAR', false, 10, null);
        $this->addColumn('operation_validation_vues_par', 'OperationValidationVuesPar', 'INTEGER', false, 5, null);
        $this->addColumn('commentaires', 'Commentaires', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAvenantTableMap
