<?php



/**
 * This class defines the structure of the 'formejuridique' table.
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
class CommonFormejuridiqueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonFormejuridiqueTableMap';

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
        $this->setName('formejuridique');
        $this->setPhpName('CommonFormejuridique');
        $this->setClassname('CommonFormejuridique');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('formejuridique', 'Formejuridique', 'VARCHAR', true, 255, '');
        $this->addColumn('ordre', 'Ordre', 'INTEGER', false, 5, null);
        $this->addColumn('libelle_formejuridique', 'LibelleFormejuridique', 'VARCHAR', true, 255, '');
        $this->addColumn('libelle_formejuridique_fr', 'LibelleFormejuridiqueFr', 'VARCHAR', true, 255, '');
        $this->addColumn('libelle_formejuridique_en', 'LibelleFormejuridiqueEn', 'VARCHAR', true, 255, '');
        $this->addColumn('libelle_formejuridique_es', 'LibelleFormejuridiqueEs', 'VARCHAR', true, 255, '');
        $this->addColumn('libelle_formejuridique_su', 'LibelleFormejuridiqueSu', 'VARCHAR', true, 255, '');
        $this->addColumn('libelle_formejuridique_du', 'LibelleFormejuridiqueDu', 'VARCHAR', true, 255, '');
        $this->addColumn('libelle_formejuridique_cz', 'LibelleFormejuridiqueCz', 'VARCHAR', true, 255, '');
        $this->addColumn('libelle_formejuridique_ar', 'LibelleFormejuridiqueAr', 'VARCHAR', true, 255, '');
        $this->addColumn('libelle_formejuridique_it', 'LibelleFormejuridiqueIt', 'VARCHAR', true, 255, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonFormejuridiqueTableMap
