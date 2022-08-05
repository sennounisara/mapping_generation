<?php



/**
 * This class defines the structure of the 'Chorus_echange' table.
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
class CommonChorusEchangeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonChorusEchangeTableMap';

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
        $this->setName('Chorus_echange');
        $this->setPhpName('CommonChorusEchange');
        $this->setClassname('CommonChorusEchange');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 20, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'decisionEnveloppe', 'organisme', true, 30, '');
        $this->addForeignKey('id_decision', 'IdDecision', 'INTEGER', 'decisionEnveloppe', 'id_decision_enveloppe', false, 20, null);
        $this->addColumn('num_ordre', 'NumOrdre', 'VARCHAR', false, 20, null);
        $this->addColumn('nom_createur', 'NomCreateur', 'VARCHAR', false, 200, null);
        $this->addColumn('prenom_createur', 'PrenomCreateur', 'VARCHAR', false, 200, null);
        $this->addColumn('id_createur', 'IdCreateur', 'INTEGER', false, 20, null);
        $this->addColumn('statutEchange', 'Statutechange', 'VARCHAR', false, 20, null);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', false, 20, null);
        $this->addColumn('date_envoi', 'DateEnvoi', 'VARCHAR', false, 20, null);
        $this->addColumn('retour_chorus', 'RetourChorus', 'VARCHAR', false, 20, null);
        $this->addColumn('id_ej_appli_ext', 'IdEjAppliExt', 'VARCHAR', true, 20, '');
        $this->addColumn('id_oa', 'IdOa', 'INTEGER', false, 20, null);
        $this->addColumn('id_ga', 'IdGa', 'INTEGER', false, 20, null);
        $this->addColumn('id_type_marche', 'IdTypeMarche', 'INTEGER', false, 20, null);
        $this->addColumn('id_type_groupement', 'IdTypeGroupement', 'VARCHAR', false, 255, null);
        $this->addColumn('id_regroupement_comptable', 'IdRegroupementComptable', 'VARCHAR', false, 255, null);
        $this->addColumn('dce_items', 'DceItems', 'VARCHAR', false, 200, null);
        $this->addColumn('ids_env_ae', 'IdsEnvAe', 'VARCHAR', false, 200, null);
        $this->addColumn('ids_env_items', 'IdsEnvItems', 'VARCHAR', false, 200, null);
        $this->addColumn('ids_pieces_externes', 'IdsPiecesExternes', 'VARCHAR', false, 200, null);
        $this->addColumn('id_agent_envoi', 'IdAgentEnvoi', 'INTEGER', false, 200, null);
        $this->addColumn('nom_agent', 'NomAgent', 'VARCHAR', false, 200, null);
        $this->addColumn('prenom_agent', 'PrenomAgent', 'VARCHAR', false, 200, null);
        $this->addColumn('signACE', 'Signace', 'CHAR', true, null, '0');
        $this->getColumn('signACE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('siren', 'Siren', 'VARCHAR', false, 9, null);
        $this->addColumn('siret', 'Siret', 'VARCHAR', false, 5, null);
        $this->addColumn('date_notification', 'DateNotification', 'VARCHAR', false, 20, null);
        $this->addColumn('date_fin_marche', 'DateFinMarche', 'VARCHAR', false, 20, null);
        $this->addColumn('id_acte_juridique', 'IdActeJuridique', 'CHAR', false, null, null);
        $this->addColumn('cpv_1', 'Cpv1', 'VARCHAR', false, 20, null);
        $this->addColumn('cpv_2', 'Cpv2', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cpv_3', 'Cpv3', 'VARCHAR', false, 20, null);
        $this->addColumn('cpv_4', 'Cpv4', 'VARCHAR', false, 20, null);
        $this->addColumn('id_type_procedure', 'IdTypeProcedure', 'INTEGER', false, 20, null);
        $this->addColumn('id_forme_prix', 'IdFormePrix', 'CHAR', false, null, null);
        $this->addColumn('Nbr_entreprises_cotraitantes', 'NbrEntreprisesCotraitantes', 'VARCHAR', false, 20, null);
        $this->addColumn('sous_traitance_declaree', 'SousTraitanceDeclaree', 'CHAR', false, null, null);
        $this->addColumn('carte_achat', 'CarteAchat', 'CHAR', false, null, null);
        $this->addColumn('clause_sociale', 'ClauseSociale', 'CHAR', false, null, null);
        $this->addColumn('clause_environnementale', 'ClauseEnvironnementale', 'CHAR', false, null, null);
        $this->addColumn('Nbr_proposition_recues', 'NbrPropositionRecues', 'VARCHAR', false, 20, null);
        $this->addColumn('Nbr_proposition_dematerialisees', 'NbrPropositionDematerialisees', 'VARCHAR', false, 20, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', false, 200, null);
        $this->addColumn('erreur_rejet', 'ErreurRejet', 'LONGVARCHAR', false, null, null);
        $this->addColumn('code_cpv_libelle1', 'CodeCpvLibelle1', 'VARCHAR', false, 250, null);
        $this->addColumn('code_cpv_libelle2', 'CodeCpvLibelle2', 'VARCHAR', false, 250, null);
        $this->addColumn('code_cpv_libelle3', 'CodeCpvLibelle3', 'VARCHAR', false, 250, null);
        $this->addColumn('code_cpv_libelle4', 'CodeCpvLibelle4', 'VARCHAR', false, 250, null);
        $this->addColumn('pieces_notif_items', 'PiecesNotifItems', 'VARCHAR', false, 200, null);
        $this->addColumn('ids_blob_env', 'IdsBlobEnv', 'VARCHAR', true, 225, '');
        $this->addColumn('ids_env_sign_items', 'IdsEnvSignItems', 'VARCHAR', false, 255, null);
        $this->addColumn('ids_blob_sign_env', 'IdsBlobSignEnv', 'VARCHAR', false, 255, null);
        $this->addColumn('montant_ht', 'MontantHt', 'VARCHAR', false, 255, null);
        $this->addColumn('code_pays_titulaire', 'CodePaysTitulaire', 'VARCHAR', false, 255, null);
        $this->addColumn('numero_siret_titulaire', 'NumeroSiretTitulaire', 'VARCHAR', false, 255, null);
        $this->addColumn('numero_siren_titulaire', 'NumeroSirenTitulaire', 'VARCHAR', false, 255, null);
        $this->addColumn('Codes_pays_co_titulaire', 'CodesPaysCoTitulaire', 'VARCHAR', false, 255, null);
        $this->addColumn('numero_siret_co_titulaire', 'NumeroSiretCoTitulaire', 'VARCHAR', false, 255, null);
        $this->addColumn('numero_siren_co_titulaire', 'NumeroSirenCoTitulaire', 'VARCHAR', false, 255, null);
        $this->addColumn('CCAG_reference', 'CcagReference', 'VARCHAR', false, 255, null);
        $this->addColumn('pourcentage_avance', 'PourcentageAvance', 'VARCHAR', false, 255, null);
        $this->addColumn('type_avance', 'TypeAvance', 'VARCHAR', false, 255, null);
        $this->addColumn('conditions_paiement', 'ConditionsPaiement', 'VARCHAR', false, 255, null);
        $this->addColumn('identifiant_accord_cadre', 'IdentifiantAccordCadre', 'VARCHAR', false, 255, null);
        $this->addColumn('date_notification_reelle', 'DateNotificationReelle', 'VARCHAR', false, 20, null);
        $this->addColumn('date_fin_marche_reelle', 'DateFinMarcheReelle', 'VARCHAR', false, 20, null);
        $this->addColumn('ids_rapport_signature', 'IdsRapportSignature', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonDecisionEnveloppe', 'CommonDecisionEnveloppe', RelationMap::MANY_TO_ONE, array('id_decision' => 'id_decision_enveloppe', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonChorusPj', 'CommonChorusPj', RelationMap::ONE_TO_MANY, array('id' => 'id_echange', 'organisme' => 'organisme', ), null, null, 'CommonChorusPjs');
    } // buildRelations()

} // CommonChorusEchangeTableMap
