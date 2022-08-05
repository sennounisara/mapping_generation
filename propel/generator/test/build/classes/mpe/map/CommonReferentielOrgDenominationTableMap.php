<?php



/**
 * This class defines the structure of the 'Referentiel_org_denomination' table.
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
class CommonReferentielOrgDenominationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonReferentielOrgDenominationTableMap';

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
        $this->setName('Referentiel_org_denomination');
        $this->setPhpName('CommonReferentielOrgDenomination');
        $this->setClassname('CommonReferentielOrgDenomination');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('denomination', 'Denomination', 'VARCHAR', true, 250, null);
        $this->addColumn('denomination_adapte', 'DenominationAdapte', 'VARCHAR', false, 250, null);
        $this->addColumn('denomination_normalise', 'DenominationNormalise', 'VARCHAR', false, 250, null);
        $this->addColumn('traite', 'Traite', 'CHAR', false, null, '0');
        $this->getColumn('traite', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('actif_recherche_avancee', 'ActifRechercheAvancee', 'CHAR', true, null, '0');
        $this->getColumn('actif_recherche_avancee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_maj_actif_recherche_avancee', 'DateMajActifRechercheAvancee', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonReferentielOrgDenominationTableMap
