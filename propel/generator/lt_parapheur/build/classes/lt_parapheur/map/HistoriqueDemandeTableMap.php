<?php



/**
 * This class defines the structure of the 'historique_demande' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class HistoriqueDemandeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.HistoriqueDemandeTableMap';

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
        $this->setName('historique_demande');
        $this->setPhpName('HistoriqueDemande');
        $this->setClassname('HistoriqueDemande');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_HISTORIQUE_DEMANDE', 'IdHistoriqueDemande', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('ID_ENTITE_AFFECTE', 'IdEntiteAffecte', 'INTEGER', false, null, null);
        $this->addColumn('SIGLE_ENTITE_AFFECTE_FR', 'SigleEntiteAffecteFr', 'VARCHAR', false, 255, null);
        $this->addColumn('SIGLE_ENTITE_AFFECTE_AR', 'SigleEntiteAffecteAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_AGENT_AFFECTE', 'IdAgentAffecte', 'INTEGER', false, null, null);
        $this->addColumn('NOM_AGENT_AFFECTE_FR', 'NomAgentAffecteFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_AGENT_AFFECTE_AR', 'NomAgentAffecteAr', 'VARCHAR', false, 255, null);
        $this->addColumn('COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE', 'CommentaireCitoyenHistoriqueDemande', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STATUT_HISTORIQUE_DEMANDE', 'StatutHistoriqueDemande', 'INTEGER', false, 3, null);
        $this->addColumn('APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE', 'AppreciationPrestationHistoriqueDemande', 'INTEGER', false, null, null);
        $this->addColumn('DATE_INTERVENTION', 'DateIntervention', 'TIMESTAMP', false, null, null);
        $this->addColumn('AGENT_HISTORIQUE_AR', 'AgentHistoriqueAr', 'VARCHAR', false, 255, null);
        $this->addColumn('AGENT_HISTORIQUE_FR', 'AgentHistoriqueFr', 'VARCHAR', false, 255, null);
        $this->addColumn('ACTION_HISTORIQUE_DEMANDE', 'ActionHistoriqueDemande', 'VARCHAR', false, 30, null);
        $this->addColumn('COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE', 'CommentaireAgentInterneHistoriqueDemande', 'LONGVARCHAR', false, null, null);
        $this->addColumn('COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE', 'CommentaireAgentVisibleHistoriqueDemande', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ID_AGENT', 'IdAgent', 'INTEGER', false, null, null);
        $this->addColumn('DETAILS_AR', 'DetailsAr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('DETAILS_FR', 'DetailsFr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ID_ENTITE_TRAITANTE', 'IdEntiteTraitante', 'INTEGER', false, null, null);
        $this->addColumn('SIGLE_ENTITE_TRAITANTE_FR', 'SigleEntiteTraitanteFr', 'VARCHAR', false, 255, null);
        $this->addColumn('SIGLE_ENTITE_TRAITANTE_AR', 'SigleEntiteTraitanteAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_PIECE_JOINTE', 'IdPieceJointe', 'INTEGER', false, null, null);
        $this->addColumn('NOM_PIECE_JOINTE', 'NomPieceJointe', 'VARCHAR', false, 255, null);
        $this->addColumn('REVISION', 'Revision', 'INTEGER', false, null, null);
        $this->addColumn('ID_HISTORIQUE_PRECEDENT', 'IdHistoriquePrecedent', 'INTEGER', false, null, null);
        $this->addColumn('ETAT', 'Etat', 'CHAR', true, null, '1');
        $this->getColumn('ETAT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ID_ACTION', 'IdAction', 'INTEGER', false, null, null);
        $this->addColumn('ID_PARTAGE', 'IdPartage', 'INTEGER', false, null, null);
        $this->addColumn('ID_FORMAT', 'IdFormat', 'INTEGER', false, null, null);
        $this->addColumn('FORMAT_FR', 'FormatFr', 'VARCHAR', false, 255, null);
        $this->addColumn('FORMAT_AR', 'FormatAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_AGENT_REMPLACANT', 'IdAgentRemplacant', 'INTEGER', false, null, null);
        $this->addColumn('AGENT_REMPLACANT_AR', 'AgentRemplacantAr', 'VARCHAR', false, 255, null);
        $this->addColumn('AGENT_REMPLACANT_FR', 'AgentRemplacantFr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_HISTORIQUE_PARENT', 'IdHistoriqueParent', 'INTEGER', false, null, null);
        $this->addColumn('DATE_ECHEANCE_REPONSE', 'DateEcheanceReponse', 'TIMESTAMP', false, null, null);
        $this->addColumn('CANAL', 'Canal', 'VARCHAR', false, 50, null);
        $this->addColumn('INFO_CANAL', 'InfoCanal', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ID_ETAPE_CIRCUIT_VALIDATION', 'IdEtapeCircuitValidation', 'INTEGER', false, null, null);
        $this->addColumn('CHAMP_SUPP_1', 'ChampSupp1', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_2', 'ChampSupp2', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_3', 'ChampSupp3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_4', 'ChampSupp4', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_SUPP_5', 'ChampSupp5', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ID_INSTRUCTION', 'IdInstruction', 'INTEGER', false, null, null);
        $this->addColumn('TYPE_CLASSEMENT', 'TypeClassement', 'INTEGER', false, null, null);
        $this->addColumn('TYPE_REPONSE', 'TypeReponse', 'INTEGER', false, null, null);
        $this->addColumn('AVEC_REPONSE', 'AvecReponse', 'CHAR', true, null, '0');
        $this->getColumn('AVEC_REPONSE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '3',
));
        $this->addColumn('REALISE', 'Realise', 'CHAR', false, null, '0');
        $this->getColumn('REALISE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_ECHEANCE_REPONSE_PROCHE', 'DateEcheanceReponseProche', 'TIMESTAMP', false, null, null);
        $this->addColumn('EMAIL_VALIDATION', 'EmailValidation', 'VARCHAR', false, 255, null);
        $this->addColumn('TOKEN_VALIDATION', 'TokenValidation', 'VARCHAR', false, 255, null);
        $this->addColumn('CHECK_LIST_TAB', 'CheckListTab', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // HistoriqueDemandeTableMap
