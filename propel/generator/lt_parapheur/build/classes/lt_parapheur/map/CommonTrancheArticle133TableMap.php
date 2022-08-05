<?php



/**
 * This class defines the structure of the 'Tranche_Article_133' table.
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
class CommonTrancheArticle133TableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTrancheArticle133TableMap';

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
        $this->setName('Tranche_Article_133');
        $this->setPhpName('CommonTrancheArticle133');
        $this->setClassname('CommonTrancheArticle133');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('acronyme_org', 'AcronymeOrg', 'VARCHAR', true, 30, null);
        $this->addColumn('millesime', 'Millesime', 'VARCHAR', true, 10, null);
        $this->addColumn('Libelle_tranche_budgetaire', 'LibelleTrancheBudgetaire', 'VARCHAR', true, 250, null);
        $this->addColumn('borne_inf', 'BorneInf', 'VARCHAR', true, 40, null);
        $this->addColumn('borne_sup', 'BorneSup', 'VARCHAR', true, 40, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTrancheArticle133TableMap
