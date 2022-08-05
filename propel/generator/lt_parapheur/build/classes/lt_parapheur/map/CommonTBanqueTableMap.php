<?php



/**
 * This class defines the structure of the 't_banque' table.
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
class CommonTBanqueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTBanqueTableMap';

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
        $this->setName('t_banque');
        $this->setPhpName('CommonTBanque');
        $this->setClassname('CommonTBanque');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('code', 'Code', 'VARCHAR', true, 255, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 50, null);
        $this->addColumn('sigle', 'Sigle', 'VARCHAR', false, 100, null);
        $this->addColumn('mode', 'Mode', 'CHAR', false, null, null);
        $this->getColumn('mode', false)->setValueSet(array (
  0 => 'centralise',
  1 => 'decentralise',
));
        $this->addColumn('adresse_siege', 'AdresseSiege', 'VARCHAR', false, 255, null);
        $this->addColumn('ville_siege', 'VilleSiege', 'VARCHAR', false, 255, null);
        $this->addColumn('id_ref_ville', 'IdRefVille', 'INTEGER', true, null, null);
        $this->addColumn('position_debut_code_agence', 'PositionDebutCodeAgence', 'INTEGER', false, null, null);
        $this->addColumn('taille_code_agence', 'TailleCodeAgence', 'INTEGER', false, null, null);
        $this->addColumn('position_debut_code_ville', 'PositionDebutCodeVille', 'INTEGER', true, null, null);
        $this->addColumn('taille_code_ville', 'TailleCodeVille', 'INTEGER', true, null, null);
        $this->addColumn('affichage_compte_virement', 'AffichageCompteVirement', 'CHAR', false, null, '0');
        $this->getColumn('affichage_compte_virement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('config_id_modele_demande_caution', 'ConfigIdModeleDemandeCaution', 'INTEGER', false, null, null);
        $this->addColumn('numero_agrement', 'NumeroAgrement', 'VARCHAR', false, 100, null);
        $this->addColumn('date_agrement', 'DateAgrement', 'DATE', false, null, null);
        $this->addColumn('config_generer_reference_caution', 'ConfigGenererReferenceCaution', 'CHAR', true, null, '0');
        $this->getColumn('config_generer_reference_caution', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('config_id_document_modele', 'ConfigIdDocumentModele', 'INTEGER', false, null, null);
        $this->addColumn('config_id_modele_demande_restitution', 'ConfigIdModeleDemandeRestitution', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTCompteBancaire', 'CommonTCompteBancaire', RelationMap::ONE_TO_MANY, array('id' => 'ID_BANQUE', ), null, null, 'CommonTCompteBancaires');
    } // buildRelations()

} // CommonTBanqueTableMap
