<?php



/**
 * This class defines the structure of the 'exec_prix' table.
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
class CommonExecPrixTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecPrixTableMap';

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
        $this->setName('exec_prix');
        $this->setPhpName('CommonExecPrix');
        $this->setClassname('CommonExecPrix');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addColumn('numero', 'Numero', 'VARCHAR', true, 255, null);
        $this->addColumn('intitule', 'Intitule', 'LONGVARCHAR', false, null, null);
        $this->addColumn('unite', 'Unite', 'VARCHAR', false, 50, null);
        $this->addColumn('quantite', 'Quantite', 'DOUBLE', false, null, null);
        $this->addColumn('quantite_min', 'QuantiteMin', 'DOUBLE', false, null, null);
        $this->addColumn('quantite_max', 'QuantiteMax', 'DOUBLE', false, null, null);
        $this->addColumn('prix_unitaire', 'PrixUnitaire', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ht', 'PrixHt', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ht_min', 'PrixHtMin', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ht_max', 'PrixHtMax', 'DOUBLE', false, null, null);
        $this->addColumn('taux_tva', 'TauxTva', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ttc', 'PrixTtc', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ttc_min', 'PrixTtcMin', 'DOUBLE', false, null, null);
        $this->addColumn('prix_ttc_max', 'PrixTtcMax', 'DOUBLE', false, null, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('id_agent_crea', 'IdAgentCrea', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addColumn('date_modif', 'DateModif', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('id_agent_modif', 'IdAgentModif', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addColumn('num_chapeau', 'NumChapeau', 'INTEGER', false, null, null);
        $this->addColumn('prix_unitaire_max', 'PrixUnitaireMax', 'DOUBLE', false, null, 0);
        $this->addColumn('prestation', 'Prestation', 'CHAR', false, null, '0');
        $this->getColumn('prestation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonAgentRelatedByIdAgentCrea', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_crea' => 'id', ), null, null);
        $this->addRelation('CommonAgentRelatedByIdAgentModif', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_modif' => 'id', ), null, null);
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
        $this->addRelation('CommonExecHistoriquePrix', 'CommonExecHistoriquePrix', RelationMap::ONE_TO_MANY, array('id' => 'id_prix', ), null, null, 'CommonExecHistoriquePrixs');
        $this->addRelation('CommonExecPrixAvenant', 'CommonExecPrixAvenant', RelationMap::ONE_TO_MANY, array('id' => 'id_prix', ), null, null, 'CommonExecPrixAvenants');
        $this->addRelation('CommonExecRepartition', 'CommonExecRepartition', RelationMap::ONE_TO_MANY, array('id' => 'id_prix', ), null, null, 'CommonExecRepartitions');
    } // buildRelations()

} // CommonExecPrixTableMap
