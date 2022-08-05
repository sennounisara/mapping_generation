<?php



/**
 * This class defines the structure of the 't_flux_rss' table.
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
class CommonTFluxRssTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTFluxRssTableMap';

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
        $this->setName('t_flux_rss');
        $this->setPhpName('CommonTFluxRss');
        $this->setClassname('CommonTFluxRss');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('tender_xml', 'TenderXml', 'LONGVARCHAR', true, null, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 255, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', false, 255, null);
        $this->addColumn('module', 'Module', 'VARCHAR', false, 255, null);
        $this->addColumn('afficher_flux_rss', 'AfficherFluxRss', 'CHAR', true, null, '1');
        $this->getColumn('afficher_flux_rss', false)->setValueSet(array (
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

} // CommonTFluxRssTableMap
