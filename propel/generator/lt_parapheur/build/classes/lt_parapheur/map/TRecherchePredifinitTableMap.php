<?php



/**
 * This class defines the structure of the 't_recherche_predifinit' table.
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
class TRecherchePredifinitTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TRecherchePredifinitTableMap';

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
        $this->setName('t_recherche_predifinit');
        $this->setPhpName('TRecherchePredifinit');
        $this->setClassname('TRecherchePredifinit');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_AGENT', 'IdAgent', 'INTEGER', false, null, null);
        $this->addColumn('LIBELLE', 'Libelle', 'VARCHAR', false, 255, null);
        $this->addColumn('OBJET_RECHERCHE', 'ObjetRecherche', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TRecherchePredifinitTableMap
