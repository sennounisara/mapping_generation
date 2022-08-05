<?php



/**
 * This class defines the structure of the 'passation_marche_a_venir' table.
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
class CommonPassationMarcheAVenirTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonPassationMarcheAVenirTableMap';

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
        $this->setName('passation_marche_a_venir');
        $this->setPhpName('CommonPassationMarcheAVenir');
        $this->setClassname('CommonPassationMarcheAVenir');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_passation_consultation', 'IdPassationConsultation', 'INTEGER', true, null, 0);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('montant_estime', 'MontantEstime', 'VARCHAR', true, 11, '0');
        $this->addColumn('id_nature_acte_juridique', 'IdNatureActeJuridique', 'INTEGER', true, null, 0);
        $this->addColumn('forme_groupement', 'FormeGroupement', 'INTEGER', true, null, 0);
        $this->addColumn('variante_autorisee', 'VarianteAutorisee', 'CHAR', true, null, '0');
        $this->getColumn('variante_autorisee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('variante_technique_obligatoire', 'VarianteTechniqueObligatoire', 'CHAR', true, null, '0');
        $this->getColumn('variante_technique_obligatoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('nombre_variante_technique', 'NombreVarianteTechnique', 'INTEGER', true, null, 0);
        $this->addColumn('description_variante_technique', 'DescriptionVarianteTechnique', 'LONGVARCHAR', true, null, null);
        $this->addColumn('mode_execution_contrat', 'ModeExecutionContrat', 'INTEGER', true, null, 0);
        $this->addColumn('type_bon_commande', 'TypeBonCommande', 'INTEGER', true, null, 0);
        $this->addColumn('min_bon_commande', 'MinBonCommande', 'VARCHAR', true, 11, '0');
        $this->addColumn('max_bon_commande', 'MaxBonCommande', 'VARCHAR', true, 11, '0');
        $this->addColumn('duree_execution_marche_hors_reconduction', 'DureeExecutionMarcheHorsReconduction', 'INTEGER', true, null, 0);
        $this->addColumn('nombre_reconduction', 'NombreReconduction', 'INTEGER', true, null, 0);
        $this->addColumn('duree_total_marche', 'DureeTotalMarche', 'INTEGER', true, null, 0);
        $this->addColumn('ccag_applicable', 'CcagApplicable', 'INTEGER', true, null, 0);
        $this->addColumn('marche_transversal', 'MarcheTransversal', 'CHAR', true, null, '0');
        $this->getColumn('marche_transversal', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_reception_analyse_offre', 'DateReceptionAnalyseOffre', 'VARCHAR', false, 10, null);
        $this->addColumn('date_formulation_observation_projet_rapport', 'DateFormulationObservationProjetRapport', 'VARCHAR', false, 10, null);
        $this->addColumn('date_retour_projet_rapport_finalise', 'DateRetourProjetRapportFinalise', 'VARCHAR', false, 10, null);
        $this->addColumn('date_validation_projet_rapport', 'DateValidationProjetRapport', 'VARCHAR', false, 10, null);
        $this->addColumn('projet_rapport_vu_par', 'ProjetRapportVuPar', 'INTEGER', false, null, null);
        $this->addColumn('date_reunion_attribution', 'DateReunionAttribution', 'VARCHAR', false, 10, null);
        $this->addColumn('decision', 'Decision', 'INTEGER', false, null, null);
        $this->addColumn('date_envoi_courrier_condidat_non_retenu', 'DateEnvoiCourrierCondidatNonRetenu', 'VARCHAR', false, 10, null);
        $this->addColumn('date_signature_marche_pa', 'DateSignatureMarchePa', 'VARCHAR', false, 10, null);
        $this->addColumn('date_reception_controle_legalite', 'DateReceptionControleLegalite', 'VARCHAR', false, 10, null);
        $this->addColumn('date_formulation_observation_dossier', 'DateFormulationObservationDossier', 'VARCHAR', false, 10, null);
        $this->addColumn('date_retour_dossier_finalise', 'DateRetourDossierFinalise', 'VARCHAR', false, 10, null);
        $this->addColumn('date_transmission_prefecture', 'DateTransmissionPrefecture', 'VARCHAR', false, 10, null);
        $this->addColumn('dossier_vu_par', 'DossierVuPar', 'INTEGER', false, null, null);
        $this->addColumn('date_validation_rapport_information', 'DateValidationRapportInformation', 'VARCHAR', false, 10, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonPassationMarcheAVenirTableMap
