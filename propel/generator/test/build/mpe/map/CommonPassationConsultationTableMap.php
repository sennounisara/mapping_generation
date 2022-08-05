<?php



/**
 * This class defines the structure of the 'Passation_consultation' table.
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
class CommonPassationConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonPassationConsultationTableMap';

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
        $this->setName('Passation_consultation');
        $this->setPhpName('CommonPassationConsultation');
        $this->setClassname('CommonPassationConsultation');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('reference', 'Reference', 'INTEGER', true, null, 0);
        $this->addColumn('unite', 'Unite', 'INTEGER', false, 5, 0);
        $this->addColumn('mandataire', 'Mandataire', 'INTEGER', false, 5, 0);
        $this->addColumn('lieu_detaille_predefini', 'LieuDetaillePredefini', 'INTEGER', false, 5, 0);
        $this->addColumn('lieux_detailles_non_definis', 'LieuxDetaillesNonDefinis', 'VARCHAR', false, 100, null);
        $this->addColumn('code_postal_lieu_principal_execution', 'CodePostalLieuPrincipalExecution', 'VARCHAR', false, 20, null);
        $this->addColumn('Ville', 'Ville', 'VARCHAR', false, 50, null);
        $this->addColumn('montant_estime_consultation', 'MontantEstimeConsultation', 'VARCHAR', false, 20, null);
        $this->addColumn('commentaires', 'Commentaires', 'LONGVARCHAR', false, null, null);
        $this->addColumn('numero_deliberation_financiere', 'NumeroDeliberationFinanciere', 'VARCHAR', false, 20, null);
        $this->addColumn('date_deliberation_financiere', 'DateDeliberationFinanciere', 'VARCHAR', false, 10, null);
        $this->addColumn('imputation_budgetaire', 'ImputationBudgetaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('numero_deliberation_autorisant_signature_marche', 'NumeroDeliberationAutorisantSignatureMarche', 'VARCHAR', false, 20, null);
        $this->addColumn('date_deliberation_autorisant_signature_marche', 'DateDeliberationAutorisantSignatureMarche', 'VARCHAR', false, 10, null);
        $this->addColumn('date_notification_previsionnelle', 'DateNotificationPrevisionnelle', 'VARCHAR', false, 10, null);
        $this->addColumn('date_reception_projet_DCE_Service_Validateur', 'DateReceptionProjetDceServiceValidateur', 'VARCHAR', false, 10, null);
        $this->addColumn('date_formulations_premieres_observations', 'DateFormulationsPremieresObservations', 'VARCHAR', false, 10, null);
        $this->addColumn('date_retour_projet_DCE_finalise', 'DateRetourProjetDceFinalise', 'VARCHAR', false, 10, null);
        $this->addColumn('date_validation_projet_DCE_par_service_validateur', 'DateValidationProjetDceParServiceValidateur', 'VARCHAR', false, 10, null);
        $this->addColumn('date_validation_projet_DCE_vue_par', 'DateValidationProjetDceVuePar', 'INTEGER', false, 5, 0);
        $this->addColumn('date_reception_projet_AAPC_par_Service_Validateur', 'DateReceptionProjetAapcParServiceValidateur', 'VARCHAR', false, 10, null);
        $this->addColumn('date_formulations_premieres_observations_AAPC', 'DateFormulationsPremieresObservationsAapc', 'VARCHAR', false, 10, null);
        $this->addColumn('date_retour_projet_AAPC_finalise', 'DateRetourProjetAapcFinalise', 'VARCHAR', false, 10, null);
        $this->addColumn('date_validation_projet_AAPC_par_Service_Validateur', 'DateValidationProjetAapcParServiceValidateur', 'VARCHAR', false, 10, null);
        $this->addColumn('date_validation_projet_AAPC_par_Service_Validateur_vu_par', 'DateValidationProjetAapcParServiceValidateurVuPar', 'INTEGER', false, 5, 0);
        $this->addColumn('date_envoi_publicite', 'DateEnvoiPublicite', 'VARCHAR', false, 10, null);
        $this->addColumn('date_envoi_invitations_remettre_offre', 'DateEnvoiInvitationsRemettreOffre', 'VARCHAR', false, 10, null);
        $this->addColumn('date_limite_remise_offres', 'DateLimiteRemiseOffres', 'VARCHAR', false, 10, null);
        $this->addColumn('delai_validite_offres', 'DelaiValiditeOffres', 'VARCHAR', false, 5, null);
        $this->addColumn('commentaires_phase_consultation', 'CommentairesPhaseConsultation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('date_reunion_ouverture_candidatures', 'DateReunionOuvertureCandidatures', 'VARCHAR', false, 10, null);
        $this->addColumn('date_reunion_ouverture_offres', 'DateReunionOuvertureOffres', 'VARCHAR', false, 10, null);
        $this->addColumn('decision', 'Decision', 'INTEGER', false, 5, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonPassationMarcheAVenir', 'CommonPassationMarcheAVenir', RelationMap::ONE_TO_MANY, array('id' => 'id_passation_consultation', ), 'CASCADE', 'CASCADE', 'CommonPassationMarcheAVenirs');
    } // buildRelations()

} // CommonPassationConsultationTableMap
