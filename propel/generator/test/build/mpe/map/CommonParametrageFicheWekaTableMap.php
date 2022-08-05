<?php



/**
 * This class defines the structure of the 'Parametrage_Fiche_Weka' table.
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
class CommonParametrageFicheWekaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonParametrageFicheWekaTableMap';

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
        $this->setName('Parametrage_Fiche_Weka');
        $this->setPhpName('CommonParametrageFicheWeka');
        $this->setClassname('CommonParametrageFicheWeka');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_fiche', 'IdFiche', 'VARCHAR', true, 255, null);
        $this->addColumn('pages', 'Pages', 'VARCHAR', false, 255, null);
        $this->addColumn('titre', 'Titre', 'VARCHAR', false, 255, null);
        $this->addColumn('url', 'Url', 'VARCHAR', false, 255, null);
        $this->addColumn('xml', 'Xml', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonParametrageFicheWekaTableMap
