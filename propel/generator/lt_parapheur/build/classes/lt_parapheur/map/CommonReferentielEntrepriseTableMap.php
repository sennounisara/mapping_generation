<?php



/**
 * This class defines the structure of the 'Referentiel_Entreprise' table.
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
class CommonReferentielEntrepriseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonReferentielEntrepriseTableMap';

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
        $this->setName('Referentiel_Entreprise');
        $this->setPhpName('CommonReferentielEntreprise');
        $this->setClassname('CommonReferentielEntreprise');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, 100, null);
        $this->addColumn('id_Lt_Referentiel', 'IdLtReferentiel', 'INTEGER', true, 100, null);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('valeur_Principale_Lt_Referentiel', 'ValeurPrincipaleLtReferentiel', 'VARCHAR', true, 200, null);
        $this->addColumn('valeur_Secondaire_Lt_Referentiel', 'ValeurSecondaireLtReferentiel', 'VARCHAR', true, 200, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonReferentielEntrepriseTableMap
