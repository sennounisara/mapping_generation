<?php



/**
 * This class defines the structure of the 'CG76_Donnee_Complementaire_Domaine' table.
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
class CommonCG76DonneeComplementaireDomaineTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCG76DonneeComplementaireDomaineTableMap';

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
        $this->setName('CG76_Donnee_Complementaire_Domaine');
        $this->setPhpName('CommonCG76DonneeComplementaireDomaine');
        $this->setClassname('CommonCG76DonneeComplementaireDomaine');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('Id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('IdDonneeComlementaire', 'Iddonneecomlementaire', 'INTEGER', true, null, null);
        $this->addColumn('IdDomaine', 'Iddomaine', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCG76DonneeComplementaireDomaineTableMap
