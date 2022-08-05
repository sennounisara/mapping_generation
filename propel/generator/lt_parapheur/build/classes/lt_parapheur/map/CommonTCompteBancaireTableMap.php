<?php



/**
 * This class defines the structure of the 't_compte_bancaire' table.
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
class CommonTCompteBancaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTCompteBancaireTableMap';

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
        $this->setName('t_compte_bancaire');
        $this->setPhpName('CommonTCompteBancaire');
        $this->setClassname('CommonTCompteBancaire');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_ENTREPRISE', 'IdEntreprise', 'INTEGER', true, null, null);
        $this->addColumn('ID_INSCRIT', 'IdInscrit', 'INTEGER', true, null, null);
        $this->addColumn('DENOMINATION', 'Denomination', 'VARCHAR', true, 100, null);
        $this->addForeignKey('ID_BANQUE', 'IdBanque', 'INTEGER', 't_banque', 'id', true, null, null);
        $this->addColumn('IDENTIFIANT_BANCAIRE', 'IdentifiantBancaire', 'VARCHAR', true, 100, null);
        $this->addColumn('CODE_VILLE', 'CodeVille', 'VARCHAR', false, 6, null);
        $this->addColumn('CODE_AGENCE', 'CodeAgence', 'VARCHAR', false, 6, null);
        $this->addColumn('ID_VILLE', 'IdVille', 'INTEGER', true, null, null);
        $this->addColumn('SUPPRIME', 'Supprime', 'CHAR', true, null, '0');
        $this->getColumn('SUPPRIME', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTIF', 'Actif', 'CHAR', true, null, '1');
        $this->getColumn('ACTIF', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('BANCARISE', 'Bancarise', 'CHAR', true, null, '1');
        $this->getColumn('BANCARISE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTBanque', 'CommonTBanque', RelationMap::MANY_TO_ONE, array('ID_BANQUE' => 'id', ), null, null);
        $this->addRelation('CommonCautionDemande', 'CommonCautionDemande', RelationMap::ONE_TO_MANY, array('ID' => 'ID_COMPTE_BANCAIRE', ), null, null, 'CommonCautionDemandes');
    } // buildRelations()

} // CommonTCompteBancaireTableMap
