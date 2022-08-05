<?php



/**
 * This class defines the structure of the 'exec_historique_prix' table.
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
class CommonExecHistoriquePrixTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonExecHistoriquePrixTableMap';

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
        $this->setName('exec_historique_prix');
        $this->setPhpName('CommonExecHistoriquePrix');
        $this->setClassname('CommonExecHistoriquePrix');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addForeignKey('id_prix', 'IdPrix', 'INTEGER', 'exec_prix', 'id', true, null, null);
        $this->addForeignKey('id_avenant', 'IdAvenant', 'INTEGER', 'exec_avenant', 'id', false, null, null);
        $this->addColumn('numero', 'Numero', 'VARCHAR', true, 255, null);
        $this->addColumn('intitule', 'Intitule', 'LONGVARCHAR', false, null, null);
        $this->addColumn('unite', 'Unite', 'VARCHAR', false, 50, null);
        $this->addColumn('quantite', 'Quantite', 'DOUBLE', false, null, null);
        $this->addColumn('prix_unitaire', 'PrixUnitaire', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ht', 'PrixHt', 'DOUBLE', false, null, null);
        $this->addColumn('taux_tva', 'TauxTva', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ttc', 'PrixTtc', 'DOUBLE', false, null, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_crea', 'IdAgentCrea', 'INTEGER', false, null, null);
        $this->addColumn('date_modif', 'DateModif', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent_modif', 'IdAgentModif', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecAvenant', 'CommonExecAvenant', RelationMap::MANY_TO_ONE, array('id_avenant' => 'id', ), null, null);
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
        $this->addRelation('CommonExecPrix', 'CommonExecPrix', RelationMap::MANY_TO_ONE, array('id_prix' => 'id', ), null, null);
    } // buildRelations()

} // CommonExecHistoriquePrixTableMap
