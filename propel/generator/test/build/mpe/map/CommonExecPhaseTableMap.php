<?php



/**
 * This class defines the structure of the 'exec_phase' table.
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
class CommonExecPhaseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecPhaseTableMap';

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
        $this->setName('exec_phase');
        $this->setPhpName('CommonExecPhase');
        $this->setClassname('CommonExecPhase');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addColumn('numero', 'Numero', 'VARCHAR', true, 255, null);
        $this->addColumn('intitule', 'Intitule', 'VARCHAR', false, 255, null);
        $this->addColumn('delai', 'Delai', 'DOUBLE', false, null, null);
        $this->addColumn('unite_delai', 'UniteDelai', 'INTEGER', false, 1, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('id_agent_crea', 'IdAgentCrea', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addColumn('date_modif', 'DateModif', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('id_agent_modif', 'IdAgentModif', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addColumn('delai_reel', 'DelaiReel', 'DOUBLE', false, null, null);
        $this->addColumn('depassement', 'Depassement', 'DOUBLE', false, null, null);
        $this->addColumn('date_maj_delai_reel', 'DateMajDelaiReel', 'TIMESTAMP', false, null, null);
        $this->addColumn('delai_differe', 'DelaiDiffere', 'DOUBLE', false, null, null);
        $this->addColumn('unite_delai_differe', 'UniteDelaiDiffere', 'INTEGER', false, 1, null);
        $this->addColumn('date_debut', 'DateDebut', 'TIMESTAMP', false, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', false, null, 0);
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
        $this->addRelation('CommonExecEvenement', 'CommonExecEvenement', RelationMap::ONE_TO_MANY, array('id' => 'id_phase', ), null, null, 'CommonExecEvenements');
    } // buildRelations()

} // CommonExecPhaseTableMap
