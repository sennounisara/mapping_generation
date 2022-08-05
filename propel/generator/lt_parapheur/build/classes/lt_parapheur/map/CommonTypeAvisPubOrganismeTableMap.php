<?php



/**
 * This class defines the structure of the 'Type_Avis_Pub_Organisme' table.
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
class CommonTypeAvisPubOrganismeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTypeAvisPubOrganismeTableMap';

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
        $this->setName('Type_Avis_Pub_Organisme');
        $this->setPhpName('CommonTypeAvisPubOrganisme');
        $this->setClassname('CommonTypeAvisPubOrganisme');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_type_avis', 'IdTypeAvis', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_type_procedure', 'IdTypeProcedure', 'INTEGER', true, null, null);
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
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTypeAvisPubOrganismeTableMap
