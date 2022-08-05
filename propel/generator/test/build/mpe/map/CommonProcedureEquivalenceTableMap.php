<?php



/**
 * This class defines the structure of the 'ProcedureEquivalence' table.
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
class CommonProcedureEquivalenceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonProcedureEquivalenceTableMap';

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
        $this->setName('ProcedureEquivalence');
        $this->setPhpName('CommonProcedureEquivalence');
        $this->setClassname('CommonProcedureEquivalence');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_type_procedure', 'IdTypeProcedure', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('elec_resp', 'ElecResp', 'CHAR', true, 2, '');
        $this->addColumn('no_elec_resp', 'NoElecResp', 'CHAR', true, 2, '');
        $this->addColumn('cipher_enabled', 'CipherEnabled', 'CHAR', true, 2, '');
        $this->addColumn('cipher_disabled', 'CipherDisabled', 'CHAR', true, 2, '');
        $this->addColumn('signature_enabled', 'SignatureEnabled', 'CHAR', true, 2, '');
        $this->addColumn('signature_disabled', 'SignatureDisabled', 'CHAR', true, 2, '');
        $this->addColumn('env_candidature', 'EnvCandidature', 'CHAR', true, 2, '');
        $this->addColumn('env_offre', 'EnvOffre', 'CHAR', true, 2, '');
        $this->addColumn('env_anonymat', 'EnvAnonymat', 'CHAR', true, 2, '');
        $this->addColumn('envoi_complet', 'EnvoiComplet', 'CHAR', true, 2, '');
        $this->addColumn('envoi_differe', 'EnvoiDiffere', 'CHAR', true, 2, '');
        $this->addColumn('procedure_publicite', 'ProcedurePublicite', 'CHAR', true, 2, '');
        $this->addColumn('procedure_restreinte_candidature', 'ProcedureRestreinteCandidature', 'CHAR', true, 2, '');
        $this->addColumn('procedure_restreinte_offre', 'ProcedureRestreinteOffre', 'CHAR', true, 2, '');
        $this->addColumn('envoi_mail_par_mpe', 'EnvoiMailParMpe', 'CHAR', true, 2, '0');
        $this->addColumn('no_envoi_mail_par_mpe', 'NoEnvoiMailParMpe', 'CHAR', true, 2, '0');
        $this->addColumn('mise_en_ligne1', 'MiseEnLigne1', 'CHAR', true, 2, '');
        $this->addColumn('mise_en_ligne2', 'MiseEnLigne2', 'CHAR', true, 2, '');
        $this->addColumn('mise_en_ligne3', 'MiseEnLigne3', 'CHAR', true, 2, '');
        $this->addColumn('mise_en_ligne4', 'MiseEnLigne4', 'CHAR', true, 2, '');
        $this->addColumn('env_offre_type_unique', 'EnvOffreTypeUnique', 'CHAR', true, 2, '');
        $this->addColumn('env_offre_type_multiple', 'EnvOffreTypeMultiple', 'CHAR', true, 2, '');
        $this->addColumn('no_fichier_annonce', 'NoFichierAnnonce', 'CHAR', true, 2, '');
        $this->addColumn('fichier_importe', 'FichierImporte', 'CHAR', true, 2, '');
        $this->addColumn('fichier_boamp', 'FichierBoamp', 'CHAR', true, 2, '');
        $this->addColumn('reglement_cons', 'ReglementCons', 'CHAR', true, 2, '');
        $this->addColumn('dossier_dce', 'DossierDce', 'CHAR', true, 2, '');
        $this->addColumn('partial_dce_download', 'PartialDceDownload', 'CHAR', true, 2, '');
        $this->addColumn('service', 'Service', 'CHAR', true, 2, '');
        $this->addColumn('constitution_dossier_reponse', 'ConstitutionDossierReponse', 'CHAR', true, 2, '');
        $this->addColumn('env_offre_type_unique2', 'EnvOffreTypeUnique2', 'CHAR', true, 2, '');
        $this->addColumn('env_offre_type_multiple2', 'EnvOffreTypeMultiple2', 'CHAR', true, 2, '');
        $this->addColumn('gestion_envois_postaux', 'GestionEnvoisPostaux', 'CHAR', true, 2, '');
        $this->addColumn('tireur_plan_non', 'TireurPlanNon', 'CHAR', true, 2, '');
        $this->addColumn('tireur_plan_oui', 'TireurPlanOui', 'CHAR', true, 2, '');
        $this->addColumn('tireur_plan_papier', 'TireurPlanPapier', 'CHAR', true, 2, '');
        $this->addColumn('tireur_plan_cdrom', 'TireurPlanCdrom', 'CHAR', true, 2, '');
        $this->addColumn('tireur_plan_nom', 'TireurPlanNom', 'CHAR', true, 2, '');
        $this->addColumn('tirage_descriptif', 'TirageDescriptif', 'CHAR', true, 2, '');
        $this->addColumn('delai_date_limite_remise_pli', 'DelaiDateLimiteRemisePli', 'CHAR', true, 2, '');
        $this->addColumn('signature_propre', 'SignaturePropre', 'CHAR', true, 2, '');
        $this->addColumn('procedure_restreinte', 'ProcedureRestreinte', 'CHAR', true, 2, '');
        $this->addColumn('ouverture_simultanee', 'OuvertureSimultanee', 'CHAR', true, 2, '');
        $this->addColumn('type_decision_a_renseigner', 'TypeDecisionARenseigner', 'CHAR', true, 2, '-0');
        $this->addColumn('type_decision_attribution_marche', 'TypeDecisionAttributionMarche', 'CHAR', true, 2, '-0');
        $this->addColumn('type_decision_declaration_sans_suite', 'TypeDecisionDeclarationSansSuite', 'CHAR', true, 2, '-0');
        $this->addColumn('type_decision_declaration_infructueux', 'TypeDecisionDeclarationInfructueux', 'CHAR', true, 2, '-0');
        $this->addColumn('type_decision_selection_entreprise', 'TypeDecisionSelectionEntreprise', 'CHAR', true, 2, '-0');
        $this->addColumn('type_decision_attribution_accord_cadre', 'TypeDecisionAttributionAccordCadre', 'CHAR', true, 2, '-0');
        $this->addColumn('type_decision_admission_sad', 'TypeDecisionAdmissionSad', 'CHAR', true, 2, '-0');
        $this->addColumn('type_decision_autre', 'TypeDecisionAutre', 'CHAR', true, 2, '-0');
        $this->addColumn('env_offre_technique', 'EnvOffreTechnique', 'CHAR', true, 2, '-0');
        $this->addColumn('env_offre_technique_type_unique', 'EnvOffreTechniqueTypeUnique', 'CHAR', true, 2, '-0');
        $this->addColumn('env_offre_technique_type_multiple', 'EnvOffreTechniqueTypeMultiple', 'CHAR', true, 2, '-0');
        $this->addColumn('rep_obligatoire', 'RepObligatoire', 'VARCHAR', true, 2, '+0');
        $this->addColumn('no_rep_obligatoire', 'NoRepObligatoire', 'VARCHAR', true, 2, '+0');
        $this->addColumn('autre_piece_cons', 'AutrePieceCons', 'CHAR', true, 2, '+0');
        $this->addColumn('resp_elec_autre_plateforme', 'RespElecAutrePlateforme', 'CHAR', true, 2, '-0');
        $this->addColumn('mise_en_ligne_entite_coordinatrice', 'MiseEnLigneEntiteCoordinatrice', 'CHAR', true, 2, '-0');
        $this->addColumn('autoriser_publicite', 'AutoriserPublicite', 'VARCHAR', true, 2, '1');
        $this->addColumn('poursuite_date_limite_remise_pli', 'PoursuiteDateLimiteRemisePli', 'CHAR', true, 2, null);
        $this->addColumn('delai_poursuite_affichage', 'DelaiPoursuiteAffichage', 'VARCHAR', true, 10, null);
        $this->addColumn('mode_ouverture_dossier', 'ModeOuvertureDossier', 'CHAR', true, 2, '+1');
        $this->addColumn('mode_ouverture_reponse', 'ModeOuvertureReponse', 'CHAR', true, 2, '+0');
        $this->addColumn('marche_public_simplifie', 'MarchePublicSimplifie', 'VARCHAR', true, 2, '0');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonProcedureEquivalenceTableMap
