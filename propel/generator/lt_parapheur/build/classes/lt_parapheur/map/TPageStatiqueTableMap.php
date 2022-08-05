<?php



/**
 * This class defines the structure of the 't_page_statique' table.
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
class TPageStatiqueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TPageStatiqueTableMap';

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
        $this->setName('t_page_statique');
        $this->setPhpName('TPageStatique');
        $this->setClassname('TPageStatique');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_PAGE', 'IdPage', 'INTEGER', true, null, null);
        $this->addColumn('ID_ORGANISME', 'IdOrganisme', 'INTEGER', false, null, null);
        $this->addColumn('ORDRE_PAGE', 'OrdrePage', 'INTEGER', true, null, null);
        $this->addColumn('MENU_AR', 'MenuAr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('MENU_FR', 'MenuFr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('CONTENU_AR', 'ContenuAr', 'CLOB', true, null, null);
        $this->addColumn('CONTENU_FR', 'ContenuFr', 'CLOB', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TPageStatiqueTableMap
