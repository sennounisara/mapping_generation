<?php



/**
 * This class defines the structure of the 'Organisme' table.
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
class CommonOrganismeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonOrganismeTableMap';

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
        $this->setName('Organisme');
        $this->setPhpName('CommonOrganisme');
        $this->setClassname('CommonOrganisme');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('acronyme', 'Acronyme', 'VARCHAR', true, 30, '');
        $this->addColumn('type_article_org', 'TypeArticleOrg', 'INTEGER', true, 1, 0);
        $this->addColumn('denomination_org', 'DenominationOrg', 'LONGVARCHAR', false, null, null);
        $this->addColumn('categorie_insee', 'CategorieInsee', 'VARCHAR', false, 20, null);
        $this->addColumn('description_org', 'DescriptionOrg', 'LONGVARCHAR', false, null, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 100, '');
        $this->addColumn('cp', 'Cp', 'VARCHAR', true, 5, '');
        $this->addColumn('ville', 'Ville', 'VARCHAR', true, 100, '');
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, '');
        $this->addColumn('url', 'Url', 'VARCHAR', true, 100, '');
        $this->addColumn('id_attrib_file', 'IdAttribFile', 'VARCHAR', false, 11, null);
        $this->addColumn('attrib_file', 'AttribFile', 'VARCHAR', true, 150, '');
        $this->addColumn('date_creation', 'DateCreation', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('active', 'Active', 'CHAR', true, null, '1');
        $this->addColumn('id_client_ANM', 'IdClientAnm', 'VARCHAR', true, 32, '0');
        $this->addColumn('status', 'Status', 'CHAR', true, null, '0');
        $this->getColumn('status', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('signataire_cao', 'SignataireCao', 'LONGVARCHAR', false, null, null);
        $this->addColumn('offset', 'Offset', 'CHAR', true, 3, '0');
        $this->addColumn('sigle', 'Sigle', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse2', 'Adresse2', 'VARCHAR', true, 100, '');
        $this->addColumn('tel', 'Tel', 'VARCHAR', true, 50, '');
        $this->addColumn('telecopie', 'Telecopie', 'VARCHAR', true, 50, '');
        $this->addColumn('pays', 'Pays', 'VARCHAR', false, 150, null);
        $this->addColumn('affichage_entite', 'AffichageEntite', 'CHAR', true, null, '');
        $this->addColumn('id_initial', 'IdInitial', 'INTEGER', true, null, 0);
        $this->addColumn('denomination_org_ar', 'DenominationOrgAr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('description_org_ar', 'DescriptionOrgAr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_ar', 'AdresseAr', 'VARCHAR', true, 100, null);
        $this->addColumn('ville_ar', 'VilleAr', 'VARCHAR', true, 100, null);
        $this->addColumn('adresse2_ar', 'Adresse2Ar', 'VARCHAR', true, 100, null);
        $this->addColumn('pays_ar', 'PaysAr', 'VARCHAR', true, 150, null);
        $this->addColumn('denomination_org_fr', 'DenominationOrgFr', 'VARCHAR', true, 100, null);
        $this->addColumn('description_org_fr', 'DescriptionOrgFr', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_fr', 'AdresseFr', 'VARCHAR', true, 100, null);
        $this->addColumn('ville_fr', 'VilleFr', 'VARCHAR', true, 100, null);
        $this->addColumn('adresse2_fr', 'Adresse2Fr', 'VARCHAR', true, 100, null);
        $this->addColumn('pays_fr', 'PaysFr', 'VARCHAR', true, 150, null);
        $this->addColumn('denomination_org_es', 'DenominationOrgEs', 'VARCHAR', true, 100, null);
        $this->addColumn('description_org_es', 'DescriptionOrgEs', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_es', 'AdresseEs', 'VARCHAR', true, 100, null);
        $this->addColumn('ville_es', 'VilleEs', 'VARCHAR', true, 100, null);
        $this->addColumn('adresse2_es', 'Adresse2Es', 'VARCHAR', true, 100, null);
        $this->addColumn('pays_es', 'PaysEs', 'VARCHAR', true, 150, null);
        $this->addColumn('denomination_org_en', 'DenominationOrgEn', 'VARCHAR', true, 100, null);
        $this->addColumn('description_org_en', 'DescriptionOrgEn', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_en', 'AdresseEn', 'VARCHAR', true, 100, null);
        $this->addColumn('ville_en', 'VilleEn', 'VARCHAR', true, 100, null);
        $this->addColumn('adresse2_en', 'Adresse2En', 'VARCHAR', true, 100, null);
        $this->addColumn('pays_en', 'PaysEn', 'VARCHAR', true, 150, null);
        $this->addColumn('denomination_org_su', 'DenominationOrgSu', 'VARCHAR', true, 100, null);
        $this->addColumn('description_org_su', 'DescriptionOrgSu', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_su', 'AdresseSu', 'VARCHAR', true, 100, null);
        $this->addColumn('ville_su', 'VilleSu', 'VARCHAR', true, 100, null);
        $this->addColumn('adresse2_su', 'Adresse2Su', 'VARCHAR', true, 100, null);
        $this->addColumn('pays_su', 'PaysSu', 'VARCHAR', true, 150, null);
        $this->addColumn('denomination_org_du', 'DenominationOrgDu', 'VARCHAR', true, 100, null);
        $this->addColumn('description_org_du', 'DescriptionOrgDu', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_du', 'AdresseDu', 'VARCHAR', true, 100, null);
        $this->addColumn('ville_du', 'VilleDu', 'VARCHAR', true, 100, null);
        $this->addColumn('adresse2_du', 'Adresse2Du', 'VARCHAR', true, 100, null);
        $this->addColumn('pays_du', 'PaysDu', 'VARCHAR', true, 150, null);
        $this->addColumn('denomination_org_cz', 'DenominationOrgCz', 'VARCHAR', true, 100, null);
        $this->addColumn('description_org_cz', 'DescriptionOrgCz', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_cz', 'AdresseCz', 'VARCHAR', true, 100, null);
        $this->addColumn('ville_cz', 'VilleCz', 'VARCHAR', true, 100, null);
        $this->addColumn('adresse2_cz', 'Adresse2Cz', 'VARCHAR', true, 100, null);
        $this->addColumn('pays_cz', 'PaysCz', 'VARCHAR', true, 150, null);
        $this->addColumn('denomination_org_it', 'DenominationOrgIt', 'VARCHAR', true, 100, '');
        $this->addColumn('description_org_it', 'DescriptionOrgIt', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse_it', 'AdresseIt', 'VARCHAR', true, 100, '');
        $this->addColumn('ville_it', 'VilleIt', 'VARCHAR', true, 100, '');
        $this->addColumn('adresse2_it', 'Adresse2It', 'VARCHAR', true, 100, '');
        $this->addColumn('pays_it', 'PaysIt', 'VARCHAR', true, 150, '');
        $this->addColumn('siren', 'Siren', 'VARCHAR', true, 9, null);
        $this->addColumn('complement', 'Complement', 'VARCHAR', true, 5, null);
        $this->addColumn('moniteur_provenance', 'MoniteurProvenance', 'INTEGER', false, null, 90);
        $this->addColumn('code_acces_logiciel', 'CodeAccesLogiciel', 'VARCHAR', false, 30, 'Y8YG-69WD-4421-4G28');
        $this->addColumn('decalage_horaire', 'DecalageHoraire', 'VARCHAR', false, 5, null);
        $this->addColumn('lieu_residence', 'LieuResidence', 'VARCHAR', false, 255, null);
        $this->addColumn('activation_fuseau_horaire', 'ActivationFuseauHoraire', 'CHAR', true, null, '0');
        $this->getColumn('activation_fuseau_horaire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('alerte', 'Alerte', 'CHAR', true, null, '0');
        $this->getColumn('alerte', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ordre', 'Ordre', 'INTEGER', true, null, 0);
        $this->addColumn('URL_INTERFACE_ANM', 'UrlInterfaceAnm', 'VARCHAR', false, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonOrganismeTableMap
