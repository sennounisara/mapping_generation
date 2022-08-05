<?php



/**
 * This class defines the structure of the 'valeur_referentiel' table.
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
class ValeurReferentielTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.ValeurReferentielTableMap';

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
        $this->setName('valeur_referentiel');
        $this->setPhpName('ValeurReferentiel');
        $this->setClassname('ValeurReferentiel');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_VALEUR_REF', 'IdValeurRef', 'INTEGER', true, null, null);
        $this->addColumn('ID_REFERENTIEL', 'IdReferentiel', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE_VALEUR_REF_FR', 'LibelleValeurRefFr', 'VARCHAR', false, 255, null);
        $this->addColumn('LIBELLE_VALEUR_REF_AR', 'LibelleValeurRefAr', 'VARCHAR', false, 255, null);
        $this->addColumn('STYLE', 'Style', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', false, null, null);
        $this->addColumn('CHAMP_GENERIQUE_FR', 'ChampGeneriqueFr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CHAMP_GENERIQUE_AR', 'ChampGeneriqueAr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ID_EXTERNE', 'IdExterne', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ValeurReferentielTableMap
