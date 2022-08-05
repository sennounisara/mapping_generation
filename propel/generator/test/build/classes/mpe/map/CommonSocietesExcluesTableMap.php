<?php



/**
 * This class defines the structure of the 'Societes_Exclues' table.
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
class CommonSocietesExcluesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonSocietesExcluesTableMap';

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
        $this->setName('Societes_Exclues');
        $this->setPhpName('CommonSocietesExclues');
        $this->setClassname('CommonSocietesExclues');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_societes_exclues', 'IdSocietesExclues', 'INTEGER', true, null, null);
        $this->addColumn('organisme_acronyme', 'OrganismeAcronyme', 'VARCHAR', false, 30, null);
        $this->addColumn('id_service', 'IdService', 'INTEGER', false, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', false, null, null);
        $this->addColumn('nom_document', 'NomDocument', 'VARCHAR', false, 255, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', false, null, null);
        $this->addColumn('taille_document', 'TailleDocument', 'VARCHAR', false, 80, null);
        $this->addColumn('identifiant_entreprise', 'IdentifiantEntreprise', 'VARCHAR', false, 20, null);
        $this->addColumn('raison_sociale', 'RaisonSociale', 'VARCHAR', false, 255, null);
        $this->addColumn('motif', 'Motif', 'VARCHAR', false, 255, null);
        $this->addColumn('raison_sociale_fr', 'RaisonSocialeFr', 'VARCHAR', false, 255, null);
        $this->addColumn('motif_fr', 'MotifFr', 'VARCHAR', false, 255, null);
        $this->addColumn('raison_sociale_ar', 'RaisonSocialeAr', 'VARCHAR', false, 255, null);
        $this->addColumn('motif_ar', 'MotifAr', 'VARCHAR', false, 255, null);
        $this->addColumn('type_exclusion', 'TypeExclusion', 'CHAR', false, null, '0');
        $this->getColumn('type_exclusion', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_debut_exclusion', 'DateDebutExclusion', 'VARCHAR', false, 20, null);
        $this->addColumn('date_fin_exclusion', 'DateFinExclusion', 'VARCHAR', false, 20, null);
        $this->addColumn('type_portee', 'TypePortee', 'CHAR', false, null, '0');
        $this->getColumn('type_portee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('raison_sociale_it', 'RaisonSocialeIt', 'VARCHAR', false, 255, '');
        $this->addColumn('motif_it', 'MotifIt', 'VARCHAR', false, 255, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonSocietesExcluesTableMap
