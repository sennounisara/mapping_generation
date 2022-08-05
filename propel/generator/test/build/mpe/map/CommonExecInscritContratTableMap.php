<?php



/**
 * This class defines the structure of the 'exec_inscrit_contrat' table.
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
class CommonExecInscritContratTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecInscritContratTableMap';

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
        $this->setName('exec_inscrit_contrat');
        $this->setPhpName('CommonExecInscritContrat');
        $this->setClassname('CommonExecInscritContrat');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addForeignKey('id_inscrit', 'IdInscrit', 'INTEGER', 'Inscrit', 'id', true, null, null);
        $this->addForeignKey('id_entreprise', 'IdEntreprise', 'INTEGER', 'Entreprise', 'id', false, null, null);
        $this->addForeignKey('id_contractant', 'IdContractant', 'INTEGER', 'exec_contractant', 'id', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecContractant', 'CommonExecContractant', RelationMap::MANY_TO_ONE, array('id_contractant' => 'id', ), null, null);
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
        $this->addRelation('CommonEntreprise', 'CommonEntreprise', RelationMap::MANY_TO_ONE, array('id_entreprise' => 'id', ), null, null);
        $this->addRelation('CommonInscrit', 'CommonInscrit', RelationMap::MANY_TO_ONE, array('id_inscrit' => 'id', ), null, null);
    } // buildRelations()

} // CommonExecInscritContratTableMap
