<?php



/**
 * This class defines the structure of the 'ValeurReferentiel' table.
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
class CommonValeurReferentielTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonValeurReferentielTableMap';

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
        $this->setName('ValeurReferentiel');
        $this->setPhpName('CommonValeurReferentiel');
        $this->setClassname('CommonValeurReferentiel');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addPrimaryKey('id_referentiel', 'IdReferentiel', 'INTEGER', true, 10, 0);
        $this->addColumn('libelle_valeur_referentiel', 'LibelleValeurReferentiel', 'LONGVARCHAR', true, null, null);
        $this->addColumn('libelle_valeur_referentiel_fr', 'LibelleValeurReferentielFr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('libelle_valeur_referentiel_en', 'LibelleValeurReferentielEn', 'LONGVARCHAR', true, null, null);
        $this->addColumn('libelle_valeur_referentiel_es', 'LibelleValeurReferentielEs', 'LONGVARCHAR', true, null, null);
        $this->addColumn('libelle_valeur_referentiel_su', 'LibelleValeurReferentielSu', 'LONGVARCHAR', true, null, null);
        $this->addColumn('libelle_valeur_referentiel_du', 'LibelleValeurReferentielDu', 'LONGVARCHAR', true, null, null);
        $this->addColumn('libelle_valeur_referentiel_cz', 'LibelleValeurReferentielCz', 'LONGVARCHAR', true, null, null);
        $this->addColumn('libelle_valeur_referentiel_ar', 'LibelleValeurReferentielAr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('libelle_2', 'Libelle2', 'VARCHAR', true, 200, '');
        $this->addColumn('libelle_valeur_referentiel_it', 'LibelleValeurReferentielIt', 'LONGVARCHAR', true, null, null);
        $this->addColumn('valeur_sub', 'ValeurSub', 'VARCHAR', false, 255, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonValeurReferentielTableMap
