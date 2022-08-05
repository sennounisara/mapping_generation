<?php



/**
 * This class defines the structure of the 'exec_avenant' table.
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
class CommonExecAvenantTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonExecAvenantTableMap';

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
        $this->setName('exec_avenant');
        $this->setPhpName('CommonExecAvenant');
        $this->setClassname('CommonExecAvenant');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addForeignKey('id_type_avenant', 'IdTypeAvenant', 'INTEGER', 'exec_type_avenant', 'id', false, null, null);
        $this->addColumn('numero', 'Numero', 'VARCHAR', true, 255, null);
        $this->addColumn('intitule', 'Intitule', 'VARCHAR', true, 255, null);
        $this->addColumn('date_notification', 'DateNotification', 'TIMESTAMP', true, null, null);
        $this->addColumn('incidence_financiere', 'IncidenceFinanciere', 'INTEGER', true, 1, null);
        $this->addColumn('positif', 'Positif', 'INTEGER', false, 1, null);
        $this->addColumn('montant_ecart_ht', 'MontantEcartHt', 'DOUBLE', false, null, null);
        $this->addColumn('montant_ecart_ttc', 'MontantEcartTtc', 'DOUBLE', false, null, null);
        $this->addColumn('pourcentage_ecart', 'PourcentageEcart', 'DOUBLE', false, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, 2, null);
        $this->addColumn('date_validation', 'DateValidation', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_validation', 'IdAgentValidation', 'INTEGER', false, null, null);
        $this->addColumn('date_rejet', 'DateRejet', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_rejet', 'IdAgentRejet', 'INTEGER', false, null, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_crea', 'IdAgentCrea', 'INTEGER', false, null, null);
        $this->addColumn('date_modif', 'DateModif', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_modif', 'IdAgentModif', 'INTEGER', false, null, null);
        $this->addColumn('id_parapheur', 'IdParapheur', 'INTEGER', false, null, null);
        $this->addColumn('date_cloture_parapheur', 'DateClotureParapheur', 'TIMESTAMP', false, null, null);
        $this->addColumn('motif_rejet', 'MotifRejet', 'VARCHAR', false, 255, null);
        $this->addColumn('date_derniere_synchronisation', 'DateDerniereSynchronisation', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
        $this->addRelation('CommonExecTypeAvenant', 'CommonExecTypeAvenant', RelationMap::MANY_TO_ONE, array('id_type_avenant' => 'id', ), null, null);
        $this->addRelation('CommonExecHistoriquePrix', 'CommonExecHistoriquePrix', RelationMap::ONE_TO_MANY, array('id' => 'id_avenant', ), null, null, 'CommonExecHistoriquePrixs');
        $this->addRelation('CommonExecPieceAvenant', 'CommonExecPieceAvenant', RelationMap::ONE_TO_MANY, array('id' => 'id_avenant', ), null, null, 'CommonExecPieceAvenants');
        $this->addRelation('CommonExecPrixAvenant', 'CommonExecPrixAvenant', RelationMap::ONE_TO_MANY, array('id' => 'id_avenant', ), null, null, 'CommonExecPrixAvenants');
    } // buildRelations()

} // CommonExecAvenantTableMap
