<?php



/**
 * This class defines the structure of the 't_version' table.
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
class TVersionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TVersionTableMap';

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
        $this->setName('t_version');
        $this->setPhpName('TVersion');
        $this->setClassname('TVersion');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_VERSION', 'IdVersion', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE', 'Libelle', 'VARCHAR', false, 100, null);
        $this->addColumn('DESCRIPTION_FR', 'DescriptionFr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('DESCRIPTION_AR', 'DescriptionAr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STATUT', 'Statut', 'CHAR', true, null, '0');
        $this->getColumn('STATUT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_VERSION', 'DateVersion', 'DATE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TVersionTableMap
