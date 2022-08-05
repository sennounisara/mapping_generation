<?php



/**
 * This class defines the structure of the 'EnchereEntreprisePmi' table.
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
class CommonEnchereEntreprisePmiTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonEnchereEntreprisePmiTableMap';

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
        $this->setName('EnchereEntreprisePmi');
        $this->setPhpName('CommonEnchereEntreprisePmi');
        $this->setClassname('CommonEnchereEntreprisePmi');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'EncherePmi', 'organisme', true, 30, '');
        $this->addForeignKey('idEnchere', 'Idenchere', 'INTEGER', 'EncherePmi', 'id', true, 10, 0);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 255, '');
        $this->addColumn('numeroAnonyme', 'Numeroanonyme', 'INTEGER', false, null, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 255, '');
        $this->addColumn('mdp', 'Mdp', 'VARCHAR', true, 255, '');
        $this->addColumn('noteTechnique', 'Notetechnique', 'DOUBLE', false, null, null);
        $this->addColumn('idEntreprise', 'Identreprise', 'INTEGER', false, 10, null);
        $this->addColumn('datePing', 'Dateping', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('nomAgentConnecte', 'Nomagentconnecte', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonEncherePmi', 'CommonEncherePmi', RelationMap::MANY_TO_ONE, array('idEnchere' => 'id', 'organisme' => 'organisme', ), null, null);
        $this->addRelation('CommonEnchereOffre', 'CommonEnchereOffre', RelationMap::ONE_TO_MANY, array('id' => 'idEnchereEntreprise', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE', 'CommonEnchereOffres');
        $this->addRelation('CommonEnchereValeursInitiales', 'CommonEnchereValeursInitiales', RelationMap::ONE_TO_MANY, array('id' => 'idEnchereEntreprise', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE', 'CommonEnchereValeursInitialess');
    } // buildRelations()

} // CommonEnchereEntreprisePmiTableMap
