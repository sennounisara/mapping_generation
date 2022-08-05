<?php



/**
 * This class defines the structure of the 'Guides' table.
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
class CommonGuidesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonGuidesTableMap';

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
        $this->setName('Guides');
        $this->setPhpName('CommonGuides');
        $this->setClassname('CommonGuides');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_guide', 'IdGuide', 'INTEGER', true, null, null);
        $this->addColumn('acces_from', 'AccesFrom', 'VARCHAR', true, 250, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 250, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 250, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 250, null);
        $this->addColumn('langue', 'Langue', 'VARCHAR', true, 2, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonGuidesTableMap
