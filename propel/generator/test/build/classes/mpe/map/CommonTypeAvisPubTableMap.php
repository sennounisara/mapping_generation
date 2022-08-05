<?php



/**
 * This class defines the structure of the 'Type_Avis_Pub' table.
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
class CommonTypeAvisPubTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTypeAvisPubTableMap';

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
        $this->setName('Type_Avis_Pub');
        $this->setPhpName('CommonTypeAvisPub');
        $this->setClassname('CommonTypeAvisPub');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 100, null);
        $this->addColumn('libelle_ar', 'LibelleAr', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_cz', 'LibelleCz', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_du', 'LibelleDu', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_en', 'LibelleEn', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_es', 'LibelleEs', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_fr', 'LibelleFr', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_it', 'LibelleIt', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_su', 'LibelleSu', 'VARCHAR', false, 100, null);
        $this->addColumn('region', 'Region', 'INTEGER', true, null, null);
        $this->addColumn('resource_formulaire', 'ResourceFormulaire', 'VARCHAR', true, 100, null);
        $this->addColumn('ressource_doc_presse', 'RessourceDocPresse', 'VARCHAR', false, 255, null);
        $this->addColumn('nature_avis', 'NatureAvis', 'INTEGER', false, 2, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTypeAvisPubTableMap
