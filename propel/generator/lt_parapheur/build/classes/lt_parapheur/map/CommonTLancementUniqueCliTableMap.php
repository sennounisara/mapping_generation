<?php



/**
 * This class defines the structure of the 't_lancement_unique_cli' table.
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
class CommonTLancementUniqueCliTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTLancementUniqueCliTableMap';

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
        $this->setName('t_lancement_unique_cli');
        $this->setPhpName('CommonTLancementUniqueCli');
        $this->setClassname('CommonTLancementUniqueCli');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_lancement_unique_cli', 'IdLancementUniqueCli', 'INTEGER', true, null, null);
        $this->addColumn('nom_cli', 'NomCli', 'VARCHAR', true, 255, null);
        $this->addColumn('en_cours', 'EnCours', 'CHAR', true, null, '0');
        $this->getColumn('en_cours', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_lancement', 'DateLancement', 'VARCHAR', false, 50, null);
        $this->addColumn('date_fin', 'DateFin', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTLancementUniqueCliTableMap
