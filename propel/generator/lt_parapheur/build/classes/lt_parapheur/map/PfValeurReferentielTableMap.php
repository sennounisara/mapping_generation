<?php



/**
 * This class defines the structure of the 'pf_valeur_referentiel' table.
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
class PfValeurReferentielTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.PfValeurReferentielTableMap';

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
        $this->setName('pf_valeur_referentiel');
        $this->setPhpName('PfValeurReferentiel');
        $this->setClassname('PfValeurReferentiel');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_VALEUR_REF', 'IdValeurRef', 'INTEGER', true, null, null);
        $this->addColumn('ID_REFERENTIEL', 'IdReferentiel', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE_VALEUR_REF_FR', 'LibelleValeurRefFr', 'VARCHAR', false, 255, null);
        $this->addColumn('LIBELLE_VALEUR_REF_AR', 'LibelleValeurRefAr', 'VARCHAR', false, 255, null);
        $this->addColumn('CATEGORIE', 'Categorie', 'CHAR', false, null, null);
        $this->getColumn('CATEGORIE', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
));
        $this->addColumn('ORDRE', 'Ordre', 'INTEGER', false, 2, null);
        $this->addColumn('DATE_MODIFICATION', 'DateModification', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PfValeurReferentielTableMap
