<?php



/**
 * This class defines the structure of the 't_jour_ferie' table.
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
class TJourFerieTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TJourFerieTableMap';

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
        $this->setName('t_jour_ferie');
        $this->setPhpName('TJourFerie');
        $this->setClassname('TJourFerie');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_JOUR_FERIE', 'IdJourFerie', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE_JOUR_FERIE', 'LibelleJourFerie', 'VARCHAR', false, 200, null);
        $this->addColumn('JOUR', 'Jour', 'INTEGER', false, 2, null);
        $this->addColumn('MOIS', 'Mois', 'INTEGER', false, 2, null);
        $this->addColumn('ANNEE', 'Annee', 'INTEGER', false, 4, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TJourFerieTableMap
