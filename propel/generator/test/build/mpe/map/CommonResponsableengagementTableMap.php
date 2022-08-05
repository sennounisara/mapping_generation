<?php



/**
 * This class defines the structure of the 'responsableengagement' table.
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
class CommonResponsableengagementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonResponsableengagementTableMap';

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
        $this->setName('responsableengagement');
        $this->setPhpName('CommonResponsableengagement');
        $this->setClassname('CommonResponsableengagement');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('entreprise_id', 'EntrepriseId', 'INTEGER', true, null, 0);
        $this->addColumn('nom', 'Nom', 'VARCHAR', false, 30, null);
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', false, 30, null);
        $this->addColumn('qualite', 'Qualite', 'VARCHAR', false, 32, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 100, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', false, 100, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 100, null);
        $this->addColumn('id_initial', 'IdInitial', 'INTEGER', false, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonResponsableengagementTableMap
