<?php



/**
 * This class defines the structure of the 'pf_mots_cles' table.
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
class PfMotsClesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.PfMotsClesTableMap';

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
        $this->setName('pf_mots_cles');
        $this->setPhpName('PfMotsCles');
        $this->setClassname('PfMotsCles');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_MOTS_CLES', 'IdMotsCles', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE', 'Libelle', 'VARCHAR', true, 50, null);
        $this->addColumn('OCCURENCE', 'Occurence', 'INTEGER', true, 3, 1);
        $this->addColumn('TRAITE', 'Traite', 'CHAR', true, null, '0');
        $this->getColumn('TRAITE', false)->setValueSet(array (
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

} // PfMotsClesTableMap
