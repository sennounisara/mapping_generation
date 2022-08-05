<?php



/**
 * This class defines the structure of the 'Administrateur' table.
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
class CommonAdministrateurTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAdministrateurTableMap';

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
        $this->setName('Administrateur');
        $this->setPhpName('CommonAdministrateur');
        $this->setClassname('CommonAdministrateur');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('original_login', 'OriginalLogin', 'VARCHAR', true, 100, '');
        $this->addColumn('login', 'Login', 'VARCHAR', true, 100, '');
        $this->addColumn('certificat', 'Certificat', 'LONGVARCHAR', false, null, null);
        $this->addColumn('mdp', 'Mdp', 'VARCHAR', true, 40, '');
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 100, '');
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', true, 100, '');
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, '');
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', false, 30, null);
        $this->addColumn('admin_general', 'AdminGeneral', 'CHAR', true, null, '0');
        $this->addColumn('tentatives_mdp', 'TentativesMdp', 'INTEGER', true, 1, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAdministrateurTableMap
