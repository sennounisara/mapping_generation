<?php



/**
 * This class defines the structure of the 'Langue' table.
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
class CommonLangueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonLangueTableMap';

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
        $this->setName('Langue');
        $this->setPhpName('CommonLangue');
        $this->setClassname('CommonLangue');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_langue', 'IdLangue', 'INTEGER', true, null, null);
        $this->addColumn('langue', 'Langue', 'VARCHAR', true, 10, '');
        $this->addColumn('active', 'Active', 'CHAR', true, null, '0');
        $this->getColumn('active', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('defaut', 'Defaut', 'CHAR', false, null, '0');
        $this->getColumn('defaut', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('theme_specifique', 'ThemeSpecifique', 'CHAR', true, null, '0');
        $this->getColumn('theme_specifique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('obligatoire_pour_publication_consultation', 'ObligatoirePourPublicationConsultation', 'CHAR', false, null, '0');
        $this->getColumn('obligatoire_pour_publication_consultation', false)->setValueSet(array (
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
    } // buildRelations()

} // CommonLangueTableMap
